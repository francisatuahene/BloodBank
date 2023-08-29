<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/blood-donation/contact', function () {
    return view('contact');
});

Route::get('/blood-donation/donation-process', function () {
    return view('donation_process');
});

Route::get('/blood-donation/eligibility', function () {
    return view('eligibilty');
});

Route::get('/blood-donation/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function () {
    // Dashboard route
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    // Login routes
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    // Logout route
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Register routes
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    // Password reset routes
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
});
    
    //Announcements routes
    Route::resource('/admin/announcements','AnnouncementsController');
    
    //Blood Info routes
    Route::resource('admin/blood-info','BloodInfoController');
    
    //Blood Request routes 
    Route::resource('/admin/blood-request','BloodRequestController');
    
    //Campaign Routes 
    Route::resource('/admin/campaign','CampaignController');
    
    //Donors Routes
    Route::resource('/admin/donors','DonorsController');


     //User Announcements routes
     Route::resource('/blood-donation/announcements','UserAnnouncementsController');
    
     
     
     //user Blood Request routes 
     Route::resource('/blood-donation/blood-request','UserBloodRequestController');
     
     //User Campaign Routes 
     Route::resource('/blood-donation/campaign','UserCampaignController');
     
     //User Donors Routes
     Route::resource('/blood-donation/donate-blood','UserBloodDonateController');
