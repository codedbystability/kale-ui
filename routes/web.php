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
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/clear-route', function() {
    Artisan::call('route:cache');
    return "route is cleared";
});

Route::get('/clear-config', function() {
    Artisan::call('config:cache');
    return "config is cleared";
});
Route::get('/clear-view', function() {
    Artisan::call('view:clear');
    return "Cache is cleared";
});
Route::get('/welcome', function() {


    return view("welcome");
});

Route::get('/twig0', function() {
    return view("pages/daily-signals");
});
Route::get('/twig1', function() {
    return view("pages/live-flow");
});

Route::get('/twig2', function() {
    return view("pages/trading-hours");
});

Route::get('/twig3', function() {
    return view("pages/account-type");
});

Route::get('/twig4', function() {
    return view("pages/platform");
});

Route::get('/twig5', function() {
    return view("pages/investment");
});


Route::get('/twig6', function() {
    return view("pages/investment-details");
});


Route::get('/twig7', function() {
    return view("pages/create-account");
});
Route::get('/twig8', function() {
    return view("pages/create-demo-account");
});

Route::get('/twig9', function() {
    return view("pages/move-account");
});

Route::get('/twig10', function() {
    return view("pages/login");
});

Route::get('/twig11', function() {
    return view("pages/contact");
});

Route::get('/twig12', function() {
    return view("pages/404");
});

Route::get('/twig13', function() {
    return view("pages/spread");
});

Route::get('/twig14', function() {
    return view("pages/processing-features");
});

Route::get('/twig14', function() {
  return view("pages/processing-features");
});


/*

Route::get('/home', function () {

    $post = [
        'name' => 'name',
        'phone' => 'phone',
        'email'   => 'email',
        'formtype' => '',
        'kaynak' => '',
        'utm'   => '',
        'ref'   => ''
    ];

    $ch = curl_init('https://cp.frxcrm.com/api/register');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    // execute!
    $response = curl_exec($ch);

    // close the connection, release resources used
    curl_close($ch);

    // do anything you want with your response
    var_dump($response);
   Debugbar::info($response);

   return response()->json($response);
});
*/
Route::post('/formRegister', "PageController@Register");

Route::post('/formContact', "PageController@contactForm");

Route::post("/registersms", "PageController@post_SmsRegister");
Route::post("/registerconfirm", "PageController@post_SmsConfirm");


Route::get('/symboldata', "PageController@GetRateBar");
Route::get('/spreadData', "PageController@GetRateSpreadData");

Route::get('/outsideData', "PageController@GetSymbolDataOutside");
Route::get('/pricesOutside', "PageController@GetSymbolPricesOutside");

Route::get('/spreadgroupData/{groupId}', "PageController@GetSpreadDataGroup");


Route::get('/holiday', "PageController@getHolidays");

Route::get('/holitest', function() {
    return 'tttt';
  });


Route::group([
    //'prefix' => '{locale}',
    //'where' => ['locale' => '[a-zA-Z]{2}'],
    //'middleware' =>'setlocale',
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','Footprints' ]
], function() {

//Route::get('/', function () { return view('welcome');});

Route::get('/', "PageController@index");

Route::get('/transfer', "PageController@getUserTransfer");
Route::get('/demo', "PageController@getRegisterDemo");
Route::get('/register', "PageController@getRegister");
Route::get('/callme', "PageController@getCallme");
Route::get('/login', "PageController@getLogin");
Route::get('/spread', "PageController@getSpread");
Route::get('/live', "PageController@getLiveFeed");
Route::get('/instruments', "PageController@getSwap");

Route::get('/symbol/{symbol}', "PageController@getInstrumentDetails");

Route::get('/promotions', "PageController@getPromotions");
Route::get('/accounts', "PageController@getAccounts");
Route::get('/hours', "PageController@getHours");

Route::get('/landing', "PageController@landing");
Route::get('/hesap-ac', "PageController@landing");
//Route::get('/open-account', "PageController@landingAr");

Route::get('/meta', "PageController@mt4");

Route::get('/christmas', "PageController@getChristmas");

Route::get('{sef}', "PageController@getContent");



});
