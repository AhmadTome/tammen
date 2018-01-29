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

Route::get('/', function () {

    return view('garage');
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

Route::get('/addpersonalInformation', function () {


    return view('MainInput.personalInformation');
});

Route::get('/addCarInformation', function () {


    return view('MainInput.CarInformation');
});

Route::get('/addMechParts', function () {

    $machpart=\App\enter_mechanic_part::all();
    return view('addMechParts')->with('machpart',$machpart);
});

Route::get('/addBodyParts', function () {
    $bodypart=\App\enter_body_part::all();

    return view('addBodyParts')->with('bodypart',$bodypart);
});

Route::get('/dropvalue', function () {


    return view('MainInput.dropvalue');
});

Route::get('/carCost', function () {


    return view('MainInput.carCost');
});

Route::get('/carGuess', function () {


    return view('MainInput.carGuess');
});

Route::get('/addCity', function () {

    $city=\App\enter_city::all();
    return view('addCity')->with('city',$city);
});

Route::get('/addCertification', function () {

    $cert=\App\add_certificate::all();
    return view('addCertification')->with('cert',$cert);
});

Route::get('/BankDisclosure', function () {
    $carInfo = \App\getCarInfo::all();
    $Id =\App\enter_personalInfo::all();
    $estimatevalue = \App\enter_estimit_value::all();

    return view('MainInput.BankDisclosure')->with('carInfo',$carInfo)->with('Id',$Id)->with('estimatevalue',$estimatevalue);
});

Route::get('/CertificationInput', function () {
    $carInfo = \App\getCarInfo::all();
    $estimater =\App\Estimater::all();
    $certificate=\App\add_certificate::all();
    return view('MainInput.CertificationInput')->with('carInfo',$carInfo)->with('estimater',$estimater)->with('certificate',$certificate);
});


Route::get('/findEstimaterinfo','addCertification@estimaterinfo');

Route::get('/carGuess','addguesscar@index');

Route::get('/carCost','carcosts@index');
Route::post('calculateCarCost','carcosts@calculate');
Route::get('/findCarInfo','cartransaction@findCarInfo');
Route::get('/addcarTransaction','cartransaction@index');
Route::get('/dropvalue','dropvalueofcar@index');

Route::get('/findCarInfoforDropValue','dropvalueofcar@findCarInfoforDropValue');
Route::get('/findCarInfoforGuess','addguesscar@findCarInfoforGesscar');


Route::get('/findCostDropValue','dropvalueofcar@findCostDropValue');
Route::get('/findCostGuesscar','addguesscar@findCostforGuessCar');
Route::get('/findDropCostGuesscar','addguesscar@findDropPercantige');


Route::post('storDropValue','dropvalueofcar@store');

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



Route::post('storepersonalInformation','addpersonalInformation@store');
Route::post('storeCarInformation','addcarInformation@store');
Route::post('storeMaintinancework','addmaintinancework@store');
Route::post('storeMechanicwork','addMechanicwork@store');
Route::post('storeBodywork','addBodywork@store');

// mechanic part transaction
Route::post('storeMechanicParts','addMechanicPart@store');
Route::get('/deletemechpart','addMechanicPart@destroy');
Route::get('/updatemechpart','addMechanicPart@update');




// Body part transaction
Route::post('storeBodyParts','addBodyPart@store');
Route::get('/deletebodypart','addBodyPart@destroy');
Route::get('/updatebodypart','addBodyPart@update');



Route::post('saveimage','addImages@store');

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
Route::post('storBankinfo','addbankinfo@store');

Route::post('storeCertification','addCertification@store');


//Route::get('/addInsuranceCompany','addInsuranceCompany@findCarInfoforGesscar');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => '/report'],function(){
    
    Route::get('/car','ReportController@car');

    Route::get('/insurance','ReportController@insurance');

    Route::get('/insurance/benifiter','ReportController@insuranceBenifiter');

    Route::get('/car/parts','ReportController@carParts');

    Route::get('/car/bank','ReportController@bank');
    
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

    //شهادة
    Route::get('/degree/{fileId}/{l?}','ReportController@degree');

    //شهادة بنك
    Route::get('/bankStmnt/{l?}','ReportController@bankStmnt');
});