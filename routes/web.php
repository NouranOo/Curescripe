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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/businessAccount', function () {
    return view('businessAccount');
});
Route::get('/businessDetail', function () {
    return view('businessDetail');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/newPassword', function () {
    return view('newPassword');
});
Route::get('/Resetpassword', function () {
    return view('Resetpassword');
});
Route::get('/signUp', function () {
    return view('signUp');
});
Route::get('/profile', function () {
    return view('dashboradPharmacy.profile');
});
Route::get('/unavailableItems', function () {
    return view('dashboradPharmacy.unavailableItems');
});
Route::get('/soldItems', function () {
    return view('dashboradPharmacy.soldItems');
}); 
Route::get('/setting', function () {
    return view('dashboradPharmacy.setting');
}); 
Route::get('/reports', function () {
    return view('dashboradPharmacy.reports');
}); 
Route::get('/precsitions2', function () {
    return view('dashboradPharmacy.precsitions2');
}); 
Route::get('/notification', function () {
    return view('dashboradPharmacy.notification');
}); 
Route::get('/indexx', function () {
    return view('dashboradPharmacy.index');
}); 
Route::get('/Dispensing', function () {
    return view('dashboradPharmacy.Dispensing');
}); 
Route::get('/contactUs', function () {
    return view('dashboradPharmacy.contactUs');
}); 




Route::get('signup', 'UserController@signup')->name('signup');
Route::post('sendsignup', 'UserController@sendsignup')->name('sendsignup');
Route::get('businessaccount', 'UserController@businessaccount')->name('businessaccount');
Route::post('personalaccount/{id}', 'UserController@personalaccount')->name('personalaccount');
Route::get('businessdetail', 'UserController@businessdetail')->name('businessdetail');
Route::post('sentbusienssdeatil/{id}', 'UserController@sentbusienssdeatil')->name('sentbusienssdeatil');
Route::get('signin', 'UserController@signin')->name('signin');
Route::post('postadminLogin', 'UserController@postadminLogin')->name('postadminLogin');
Route::get('resetpass', 'UserController@resetpass')->name('resetpass');
Route::get('index', 'UserController@index')->name('index');
Route::get('newpass', 'UserController@newpass')->name('newpass');
//Route::post('pasword/email', 'ForgetPasswordController@sendResetLinkEmail')->name('pasword.email')->middleware('guest');

Route::group(['prefix' => 'pharmace', 'middleware' => ['Pharmace']], function () {

Route::get('dispensing', 'UserController@dispensing')->name('dispensing');
Route::post('setntdispensing', 'UserController@setntdispensing')->name('setntdispensing');
Route::get('dispense', 'UserController@dispense')->name('dispense');
Route::get('contactus', 'UserController@contactus')->name('contactus');
Route::post('sentcontactus', 'UserController@sentcontactus')->name('sentcontactus');
Route::get('profile', 'UserController@profile')->name('profile');
Route::post('senteditprofile', 'UserController@senteditprofile')->name('senteditprofile');
Route::post('sentprofessionalprofile', 'UserController@sentprofessionalprofile')->name('sentprofessionalprofile');
Route::post('sentnewpass', 'UserController@sentnewpass')->name('sentnewpass');
Route::post('sentbusinessdetail', 'UserController@sentbusinessdetail')->name('sentbusinessdetail');
Route::post('deactivate', 'UserController@deactivate')->name('deactivate');
Route::post('active', 'UserController@active')->name('active');


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
