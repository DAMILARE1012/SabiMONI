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

// Route::get('/', function () {
//     return view('pages.home');
// });

// Route::get('home', function () {
//     return view('index');
// });

Route::post('contact-us', 'ContactController@saveContact')->name('contact-us');
Route::get('/', 'PagesController@home')->name('home');
Route::get('/faqs', 'PagesController@faqs')->name('faqs');


Route::get('courses/sanef', 'PagesController@sanefGroup')->name('courses.sanef');
Route::get('courses/cflt', 'PagesController@cfltGroup')->name('courses.cflt');
<<<<<<< HEAD
Route::get('courses/basicFinLit', 'PagesController@basicFinGroup')->name('courses.basicFin');
=======
Route::get('courses/basic_financial', 'PagesController@basicFinGroup')->name('courses.basicFin');


// Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('my-captcha', 'ContactController@myCaptchaPost')->name('myCaptcha.post');
Route::get('/refresh_captcha', 'ContactController@refreshCaptcha')->name('refresh_captcha');
Route::get('/blog', 'PagesController@blog')->name('blog');
>>>>>>> c436fbcd6ec9a7a887eb5bafe1bf35d4d8de8225
