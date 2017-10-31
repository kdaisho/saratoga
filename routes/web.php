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
//     return view('welcome');
// });

//This line does the same as above
// Route::view('/', 'welcome');

// Main GET routes with locale
// Route::prefix('{locale?}')->middleware('locale')->group(function() {
//     Route::get('/', function () {
//         return view('index');
//     });
// });


Route::get('/{locale?}', function($locale = null) {
    App::setLocale($locale);
    return view('pages.welcome');
});

Route::get('/{locale?}/about', function($locale = null) {
    App::setLocale($locale);
    return view('pages.about');
});

Route::get('/{locale?}/contact', function($locale = null) {
    App::setLocale($locale);
    return view('pages.contact');
});


// Route::get('/{locale}', 'PagesController@getIndex');


// Route::get('/{locale}/about', 'PagesController@getAbout');

// Route::get('/{locale}/contact', 'PagesController@getContact');