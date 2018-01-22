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

    return view('garage');
});

Route::get('/crossOff', function () {


    return view('crossOff');
});

Route::get('/addEstimater', function () {


    return view('addEstimater');
});

Route::get('/addDamage', function () {


    return view('addDamage');
});

Route::get('/addMaintinance', function () {


    return view('addMaintinance');
});

Route::get('/addInsuranceCompany', function () {


    return view('addInsuranceCompany');
});

Route::get('/addTextStructure', function () {


    return view('addTextStructure');
});

Route::get('/addEstimatevalue', function () {


    return view('addEstimatevalue');
});

Route::get('/addAccedentSide', function () {


    return view('addAccedentSide');
});

Route::get('/dropStatment', function () {


    return view('StatementDropCar');
});

Route::get('/addpersonalInformation', function () {


    return view('MainInput.personalInformation');
});

Route::get('/addCarInformation', function () {


    return view('MainInput.CarInformation');
});

Route::get('/addMechParts', function () {


    return view('addMechParts');
});

Route::get('/addBodyParts', function () {


    return view('addBodyParts');
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


    return view('addCity');
});

Route::get('/addCertification', function () {


    return view('addCertification');
});


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


Route::post('store','addgarage@store');
Route::post('storeCrossOff','addcrossoff@store');
Route::post('storeEstimater','addEstimater@store');
Route::post('storeDamage','addDamage@store');
Route::post('storeMaintinance','addMaintinance@store');
Route::post('storeInsurancecompany','addInsuranceCompany@store');
Route::post('storeTextStructure','addTextStructure@store');
Route::post('storeEstimatevalue','addEstimatevalue@store');
Route::post('storeAccedentSide','addAccedentSide@store');
Route::post('storepersonalInformation','addpersonalInformation@store');
Route::post('storeCarInformation','addcarInformation@store');
Route::post('storeMaintinancework','addmaintinancework@store');
Route::post('storeMechanicwork','addMechanicwork@store');
Route::post('storeBodywork','addBodywork@store');
Route::post('storeMechanicParts','addMechanicPart@store');
Route::post('storeBodyParts','addBodyPart@store');
Route::post('saveimage','addImages@store');
Route::post('storeDropStatment','addDropStatment@store');
Route::post('storeCity','addCity@store');
Route::post('storeCertification','enter_certificate@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => '/report'],function(){
    Route::get('/carInfo/{fileId}/{l?}','ReportController@carInfo');
    Route::get('/fileAccount/{fileId}/{l?}','ReportController@fileAccount');
    Route::get('/personalFileAccount/{fileId}/{l?}','ReportController@personalFileAccount');
});