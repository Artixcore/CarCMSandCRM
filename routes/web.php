<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {return view('welcome');});


// New Menu
Route::get('/buy', function () {return view('buyrent/used');}); 
Route::get('/sell', function () {return view('sell/sell');});
Route::post('sell-req', 'Form\SellController@sell_post');

// Route::get('/sell-quote', function(){return view('sell.scrap');})->name('scrap');
Route::get('/sell-quote', function(){return view('sell.scrap');});
Route::get('/lease', function () {return view('lease/lease');});
Route::get('/insurance', function () {return view('insurance/insurance');});
Route::get('/used-car',  function () {return view('buyrent/used');});
Route::get('/coe-renewal', function () {return view('coe/coe');});
Route::get('/about-us', function () {return view('about/about');});
// Route::get('/contact-us', function () {return view('contact/contact');});
Route::get('/terms', function () {return view('contact/contact');});
Route::get('/policy', function () {return view('contact/contact');});
Route::get('/quote', function () {return view('insurance/quote');});
Route::get('/finance', function () {return view('loan/loan');});


// Single View
Route::get('cars/{model_name}', 'Frontend\FrontendController@view_car');


Auth::routes();


// Frontend
Route::post('contact-us', 'Frontend\FrontendController@contact');

Route::get('profile/{name}',  'Profile\ProfileController@profile');
Route::post('update-ava','UserController@update_avatar');

Route::get('changestatus', 'UserController@status')->name('changestatus');

// Forms
   // loan
Route::get('car-loan-request', 'Form\LoanController@loan_request'); 
Route::post('loan-submit', 'Form\LoanController@loan_form');  

   // COE
Route::get('get-coe', 'Form\COEController@load_coe');   
Route::post('save-coe','Form\COEController@ceo_save'); 

   // Insurance
Route::get('get-insurance', 'Form\InsuranceController@insurance_request');   
Route::post('save-insurance', 'Form\InsuranceController@pre_insurance_form');  
Route::post('full-insurance', 'Form\InsuranceController@insurance_form');  

   // Warrenty
Route::get('get-warrenty','Form\WarrentyController@get_warrenty');   
Route::post('post-warrenty','Form\WarrentyController@post_warrenty');

   // Sell
// Route::post('sell-post', 'Form\SellController@sell_post'); 
Route::post('car-sell-post', 'Form\CarSellController@sell_by_owner'); 
Route::get('get-car', 'Form\SellController@view_sells');  

   // Sell Cars
Route::post('post-cars','Form\CarSellController@post_cars');
Route::get('car-requests','Form\CarSellController@car_requests');

 // Loan
 Route::get('loan', 'LoanController@loan');
 Route::post('applied', 'Form\LoanController@applied');


// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
   Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
   Route::get('all','CarController@all'); 
   Route::get('new','CarController@new');

  
 // Loan
 Route::get('loan', 'LoanController@loan');

   Route::get('requests','CarController@requests');

   Route::post('save-car','CarController@save_car'); 

   // Worrenty
   Route::get('policy', 'WarrentyController@get_page');

   // Article
   Route::get('new-article','ArticleController@new_article');
   Route::post('upload', 'ArticleController@upload');

   // Lease
   Route::get('get-lease','CarLeaseController@get_page');
   Route::get('lease-request','CarLeaseController@get_request_page');
   Route::post('post-lease','CarLeaseController@post_lease');

    // Contact
   Route::get('contact', 'ContactController@contact');
   Route::get('compose-mail', 'ContactController@compose');
   Route::post('compose-mail', 'ContactController@composeMail');

});



// SuperAdmin
Route::namespace('Superadmin')->prefix('superadmin')->name('superadmin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
});
