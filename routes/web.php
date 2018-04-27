<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Damage;
use App\enter_body_part;
use App\enter_city;
use App\enter_Drop_statment;
use App\enter_garage;
use App\enter_insurence_company;
use App\enter_maintinance;
use App\enter_personalInfo;
use App\Estimater;
use App\getCarInfo;

Route::get('/err',function(){
    return view('errors.noData');
});

Auth::routes();

Route::group(['middleware' => ['auth','preventBackHistory']],function(){

    Route::get('/',function(){
        return view('home');
    });

Route::get('/garage', function () {
    $garage=\App\enter_garage::all();
    return view('garage')->with('garage',$garage);
});

Route::get('/crossOff', function () {
    $crossoff=\App\crossoff::all();

    return view('crossOff')->with('crossoff',$crossoff);
});

Route::get('/addEstimater', function () {
$estimater=\App\Estimater::all();

    return view('addEstimater')->with('estimater',$estimater);
});

Route::get('/addDamage', function () {
$damage=\App\Damage::all();

    return view('addDamage')->with('damage',$damage);
});

Route::get('/addMaintinance', function () {

    $maintinance=\App\enter_maintinance::all();
    return view('addMaintinance')->with('maintinance',$maintinance);
});

Route::get('/addInsuranceCompany', function () {
$ins=\App\enter_insurence_company::all();


    return view('addInsuranceCompany')->with('ins',$ins);
});

Route::get('/addTextStructure', function () {
    $text=\App\enter_structer_text::all();

    return view('addTextStructure')->with('text',$text);
});

Route::get('/addEstimatevalue', function () {
    $estimatevalue=\App\enter_estimit_value::all();

    return view('addEstimatevalue')->with('estimatevalue',$estimatevalue);
});

Route::get('/addAccedentSide', function () {
    $accedentside=\App\enter_accedent_side::all();

    return view('addAccedentSide')->with('accedentside',$accedentside);
});

Route::get('/dropStatment', function () {
    $dropstatment=\App\enter_Drop_statment::all();

    return view('StatementDropCar')->with('dropstatment',$dropstatment);
});


// personal Information
Route::get('/addpersonalInformation', function () {


    return view('MainInput.personalInformation');
});
Route::get('/personalinformationTransaction', function () {

    $Id=enter_personalInfo::all();
    return view('EditDelete.personalinformationTransaction')->with('Id',$Id);
});

//Car Information
Route::get('/addCarInformation', function () {


    return view('MainInput.CarInformation');
});
Route::get('/carinfoTransaction', function () {
    $carInfo=\App\enter_car_info::all();

    return view('EditDelete.carinfoTransaction')->with('carInfo',$carInfo);
});



Route::get('/addMechParts', function () {

    $machpart=\App\enter_mechanic_part::all();
    return view('addMechParts')->with('machpart',$machpart);
});

Route::get('/addBodyParts', function () {
    $bodypart=\App\enter_body_part::all();

    return view('addBodyParts')->with('bodypart',$bodypart);
});

// Drop Car Transaction
Route::get('/dropcarTransaction', function () {

    $carInfo=getCarInfo::all();
    $dropStatment=enter_Drop_statment::all();
    $maintinance=enter_maintinance::all();
    $bodypart=enter_body_part::all();
    return view('EditDelete.dropcarTransaction')->with('carInfo',$carInfo)->with('dropStatment',$dropStatment)
        ->with('maintinance',$maintinance)->with('bodypart',$bodypart);
});
Route::get('/dropvalue', function () {


    return view('MainInput.dropvalue');
});

// car cost Transaction
Route::get('/carCost', function () {


    return view('MainInput.carCost');
});
Route::get('/carcostTransaction', function () {
    $carInfo=getCarInfo::all();

    return view('EditDelete.carcostTransaction')->with('carInfo',$carInfo);
});

// Car Guess Transaction
Route::get('/carGuess', function () {


    return view('MainInput.carGuess');
});
Route::get('/CarGuessTransaction', function () {
    $carInfo=getCarInfo::all();
    $insuranceCompany=enter_insurence_company::all();
    $cities=enter_city::all();
    $Id = enter_personalInfo::all();
    $DamageType=Damage::all();
    $Estimater=Estimater::all();
    $Garage=enter_garage::all();

    return view('EditDelete.CarGuessTransaction')->with('carInfo',$carInfo)->with('insuranceCompany',$insuranceCompany)
        ->with('cities',$cities)->with('Id',$Id)->with('DamageType',$DamageType)->with('Estimater',$Estimater)
        ->with('Garage',$Garage);;
});



Route::get('/addCity', function () {

    $city=\App\enter_city::all();
    return view('addCity')->with('city',$city);
});

Route::get('/addCertification', function () {

    $cert=\App\add_certificate::all();
    return view('addCertification')->with('cert',$cert);
});

//Bank Transaction
Route::get('/BankDisclosure', function () {
    $carInfo = \App\getCarInfo::all();
    $Id =\App\enter_personalInfo::all();
    $estimatevalue = \App\enter_estimit_value::all();

    return view('MainInput.BankDisclosure')->with('carInfo',$carInfo)->with('Id',$Id)->with('estimatevalue',$estimatevalue);
});
Route::get('/BankTransaction', function () {
    $carInfo = \App\getCarInfo::all();
    $Id =\App\enter_personalInfo::all();
    $estimatevalue = \App\enter_estimit_value::all();

    return view('EditDelete.BankTransaction')->with('carInfo',$carInfo)->with('Id',$Id)->with('estimatevalue',$estimatevalue);
});

// Certifaction Main Input Transaction
Route::get('/CertificationInput', function () {
    $carInfo = \App\getCarInfo::all();
    $estimater =\App\Estimater::all();
    $certificate=\App\add_certificate::all();
    return view('MainInput.CertificationInput')->with('carInfo',$carInfo)->with('estimater',$estimater)->with('certificate',$certificate);
});
Route::get('/certificationTransaction', function () {
    $carInfo = \App\getCarInfo::all();
    $estimater =\App\Estimater::all();
    $certificate=\App\add_certificate::all();
    return view('EditDelete.certificationTransaction')->with('carInfo',$carInfo)->with('estimater',$estimater)->with('certificate',$certificate);
});

Route::get('/maintinanceTransaction', function () {
    $carInfo=getCarInfo::all();
    $maintinanceinfo=enter_maintinance::all();
    return view('EditDelete.maintinanceTransaction')->with('carInfo',$carInfo)->with('maintinanceinfo',$maintinanceinfo);
});
Route::get('/mechanicalTransaction', function () {
    $carInfo=getCarInfo::all();
    $mechanicinfo=\App\enter_mechanic_part::all();
    return view('EditDelete.mechanicalTransaction')->with('carInfo',$carInfo)->with('mechanicinfo',$mechanicinfo);
});

Route::get('/BodyTransaction', function () {
    $carInfo=getCarInfo::all();
    $Bodyinfo=enter_body_part::all();
    return view('EditDelete.BodyTransaction')->with('carInfo',$carInfo)->with('Bodyinfo',$Bodyinfo);
});


Route::get('/sendMessage', function () {

    return view('MainInput.sendMessage');
});

Route::post('/sendmail', function (\Illuminate\Http\Request $request,\Illuminate\Mail\Mailer $mailer) {

    $mailer->to($request->input('mail'))->send(new \App\Mail\MyMail($request->input('title'),$request->input('subject')));

    return redirect()->back();
})->name('sendmail');

Route::get('/imageTreansaction', function () {
$carInfo =getCarInfo::all();
    return view('EditDelete.imageTreansaction')->with('carInfo',$carInfo);
});

// save letter
Route::get('/SaveLetter', function () {
    return view('MainInput.saveletter');
});




Route::get('/findEstimaterinfo','addCertification@estimaterinfo');

// car Guess Transaction
Route::get('/carGuess','addguesscar@index');
Route::get('/getallinfo','addguesscar@findallinfo');
Route::get('/deleteGuess','addguesscar@destroy');
Route::post('editGuess','addguesscar@update');

// car cost Transaction
Route::get('/carCost','carcosts@index');
Route::post('calculateCarCost','carcosts@calculate');
Route::get('/getcarcostinfo','carcosts@getcarcostinfo');
Route::get('/deletcarprice','carcosts@destroy');
Route::post('Editcarcost','carcosts@update');




Route::get('/findCarInfo','cartransaction@findCarInfo');
Route::get('/addcarTransaction','cartransaction@index');
Route::get('/dropvalue','dropvalueofcar@index');

Route::get('/findCarInfoforGuess','addguesscar@findCarInfoforGesscar');


Route::get('/findCostDropValue','dropvalueofcar@findCostDropValue');
Route::get('/findCostGuesscar','addguesscar@findCostforGuessCar');
Route::get('/findDropCostGuesscar','addguesscar@findDropPercantige');

// drop car Transaction
Route::post('storDropValue','dropvalueofcar@store');
Route::get('/findCarInfoforDropValue','dropvalueofcar@findCarInfoforDropValue');
Route::get('/deletedropcar','dropvalueofcar@destroy');
Route::post('EditDropValue','dropvalueofcar@update');


//garage transaction
Route::post('store','addgarage@store');
Route::get('/deletegarage','addgarage@destroy');
Route::get('/updategarage','addgarage@update');


// cross off transaction
Route::post('storeCrossOff','addcrossoff@store');
Route::get('/deletecrossoff','addcrossoff@destroy');
Route::get('/updatecrossoff','addcrossoff@update');


//Estimater transaction
Route::post('storeEstimater','addEstimater@store');
Route::get('/deleteEstimater','addEstimater@destroy');
Route::get('/updateEstimater','addEstimater@update');

// Damage transaction
Route::post('storeDamage','addDamage@store');
Route::get('/deletedamage','addDamage@destroy');
Route::get('/updatedamage','addDamage@update');



// maintinance part transaction
Route::post('storeMaintinance','addMaintinance@store');
Route::get('/deletemaintinance','addMaintinance@destroy');
Route::get('/updatemaintinance','addMaintinance@update');


// insurance company transaction
Route::post('storeInsurancecompany','addInsuranceCompany@store');
Route::get('/deleteInsuranceCompany','addInsuranceCompany@destroy');
Route::get('/updateInsuranceCompany','addInsuranceCompany@update');


// text structer transaction
Route::post('storeTextStructure','addTextStructure@store');
Route::get('/deletetext','addTextStructure@destroy');
Route::get('/updatetext','addTextStructure@update');

// Estimate value Transaction
Route::post('storeEstimatevalue','addEstimatevalue@store');
Route::get('/deleteestimatevalue','addEstimatevalue@destroy');
Route::get('/updateestimatevalue','addEstimatevalue@update');


// accedent side Transaction
Route::post('storeAccedentSide','addAccedentSide@store');
Route::get('/deleteaccedentside','addAccedentSide@destroy');
Route::get('/updateaccedentside','addAccedentSide@update');


// personal transation
Route::post('storepersonalInformation','addpersonalInformation@store');
Route::get('/findpersoninfo','addpersonalInformation@findinfo');
Route::get('/deletpersoninfo','addpersonalInformation@destroy');
Route::post('Editpersoninfo','addpersonalInformation@update');


// Car Information Transaction
Route::post('storeCarInformation','addcarInformation@store');
Route::get('/getalldataaboutcar','addcarInformation@findcarinfo');
Route::get('/deletcar','addcarInformation@destroy');
Route::post('EditCarInformation','addcarInformation@update');



// Maintinance work Transaction
Route::post('storeMaintinancework','addmaintinancework@store');
Route::get('/getallmaintinancedata','addmaintinancework@getall');
Route::get('/deletemaintinancework','addmaintinancework@destroy');
Route::post('EditMaintinancework','addmaintinancework@update');



// Mechanical work Transaction
Route::post('storeMechanicwork','addMechanicwork@store');
Route::get('/getallmechanicaldata','addMechanicwork@getall');
Route::get('/deletemechanicalwork','addMechanicwork@destroy');
Route::post('Editmechanicalwork','addMechanicwork@update');



// Body work Transaction
Route::post('storeBodywork','addBodywork@store');
Route::get('/getallbodyworkdata','addBodywork@getall');
Route::get('deleteBodywork/','addBodywork@destroy');
Route::post('EditBodywork','addBodywork@update');



// mechanic part transaction
Route::post('storeMechanicParts','addMechanicPart@store');
Route::get('/deletemechpart','addMechanicPart@destroy');
Route::get('/updatemechpart','addMechanicPart@update');




// Body part transaction
Route::post('storeBodyParts','addBodyPart@store');
Route::get('/deletebodypart','addBodyPart@destroy');
Route::get('/updatebodypart','addBodyPart@update');


//Image Transacrtion
Route::post('saveimage','addImages@store');
Route::get('/getimageinfo','addImages@getall');
Route::get('deleteiamge','addImages@destroy');



// Drop statment Transaction
Route::post('storeDropStatment','addDropStatment@store');
Route::get('/deletedropstatment','addDropStatment@destroy');
Route::get('/updatedropstatment','addDropStatment@update');


// City Transaction
Route::post('storeCity','addCity@store');
Route::get('/deletecity','addCity@destroy');
Route::get('/updatecity','addCity@update');



//certification constant input transaction
Route::post('storeCertificat','enter_certificate@store');
Route::get('/deletecert','enter_certificate@destroy');
Route::get('/updatecert','enter_certificate@update');




Route::post('storeEstimateCar','addguesscar@store');

// Bank Transaction
Route::post('storBankinfo','addbankinfo@store');
Route::get('/getbankonfo','addbankinfo@findbankinfo');
Route::get('/getallbankinfo','addbankinfo@findallbankinfo');
Route::get('/deletbankfile','addbankinfo@destroy');
Route::post('EditBankinfo','addbankinfo@update');


// certification main input Transaction
Route::post('storeCertification','addCertification@store');
Route::get('/getallinfoforcert','addCertification@findcertinfo');
Route::get('/deletcert','addCertification@destroy');
Route::post('EditCertification','addCertification@update');

// save letter
Route::post('saveletter','saveletterConreoller@store');

//Route::get('/addInsuranceCompany','addInsuranceCompany@findCarInfoforGesscar');


Route::get('/uploadimage','addImages@store');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/car/parts/dates/{fileId}','ReportController@partsDates');

Route::group(['prefix' => '/report'],function(){
    
    Route::get('/car','ReportController@car');

    Route::get('/insurance','ReportController@insurance');

    Route::get('/insurance/benifiter','ReportController@insuranceBenifiter');

    Route::get('/car/parts','ReportController@carParts');

    Route::get('/car/bank','ReportController@bank');

    Route::get('/monitor','ReportController@monitor');

    Route::get('/images','ReportController@images');
    
    //تقرير بيانات مركبة
    Route::get('/carInfo/{fileId}/{l?}','ReportController@carInfo');
    
    //تقرير حساب فايل
    Route::get('/fileAccount/{fileId}/{l?}','ReportController@fileAccount');

    //تقرير حساب فايل / ملف شخصي
    Route::get('/personalFileAccount/{fileId}/{l?}','ReportController@personalFileAccount');

    //تقرير شطب مركبة
    Route::get('/carDestroy/{fileId}/{l?}','ReportController@carDestroy');

    //تقرير ثمن المركبة
    Route::get('/carPrice/{fileId}/{l?}','ReportController@carPrice');

    //تقرير ثمن المركبة مع حطام
    Route::get('/carPriceWithRek/{fileId}/{l?}','ReportController@carPriceWithRek');

    //دائرة الترخيص
    Route::get('/licence/{fileId}/{l?}','ReportController@licence');

    //تقرير أضرار أولي
    Route::get('/initialDamageReport/{fileId}/{l?}','ReportController@initialDamage');

    //كشف زيارات المركبة
    Route::get('/carVisit/{fileId}/{l?}','ReportController@carVisit');

    //حساب شركة التامين
    Route::get('/insCompanyAcc','ReportController@insCompanyAcc');

    //حساب شركة التامين للمستفيد
    Route::get('/insCompanyUser','ReportController@insCompanyUser');

    //تقرير قطع غيار هيكل
    Route::get('/bodyPartChange/{l?}','ReportController@bodyPartChange');

    //تقرير قطع غيار ميكانيك
    Route::get('/mechPartChange/{l?}','ReportController@mechPartChange');

    //أعمال مركبة
    Route::get('/carWork/{l?}','ReportController@carWork');

    //هبوط مركبة
    Route::get('/carDown/{l?}','ReportController@carDown');

    //أضرار فنية لدائرة الترخيص
    Route::get('/carTechDamage/{l?}','ReportController@carTechDamage');

    //شهادة
    Route::get('/degree/{fileId}/{l?}','ReportController@degree');

    //شهادة بنك
    Route::get('/bankStmnt/{l?}','ReportController@bankStmnt');

    //تقرير الرقابة
    Route::get('/monitorReport','ReportController@monitorReport');

    //صور الحادث
    Route::get('/carImages/{fileId}','ReportController@carImages');
});

});