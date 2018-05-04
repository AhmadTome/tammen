<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\letter;

class LetterController extends Controller
{
    public function getList(){
        $dests = letter::distinct('destination')->select('destination')->get();
        return view('letter.list',['dests' => $dests]);
    }

    public function getListPost(Request $request){
        extract($request->all());

        $text = empty($text) ? '' : $text;
        $from_date = empty($from_date) ? null : $from_date;
        $to_date = empty($to_date) ? null : $to_date;
        $dest = empty($dest) ? 'ALL' : $dest;

        $letters = letter::where(function($query) use($text){
            $sText = '%'.$text.'%';
            $query->where('subject','LIKE',$sText)
            ->orWhere('msg','LIKE',$sText);
        });

        if($from_date != null){
            $newFromDate = date('Y-m-d H:i:s',strtotime($from_date));
            $letters->where('created_at','>=',$newFromDate);
        }

        if($to_date != null){
            $newToDate = date('Y-m-d H:i:s',strtotime($to_date));
            $letters->where('created_at','<=',$newToDate);
        }

        if($dest != 'ALL'){
            $letters->where('destination',$dest);
        }

        return response()->json($letters->get());
    }
}
