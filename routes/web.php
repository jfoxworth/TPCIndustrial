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
    return view('layouts.landing');
});

Route::get('/Staff', function () {
    return view('layouts.Staff.staff');
});

Route::get('/Products', function () {
    return view('layouts.Products.products');
});

Route::get('/Contact', function () {
    return view('layouts.Contact.contact');
});

Route::get('/Events', function () {
    return view('layouts.Events.events');
});








Route::get('/option1', function () {
    return view('layouts.option1.landing');
});

Route::get('/option1/Staff', function () {
    return view('layouts.option1.staff');
});

Route::get('/option1/Products', function () {
    return view('layouts.option1.products');
});

Route::get('/option1/Contact', function () {
    return view('layouts.option1.contact');
});













Route::get('/option2', function () {
    return view('layouts.option2.landing');
});

Route::get('/option2/Staff', function () {
    return view('layouts.option2.staff');
});

Route::get('/option2/Products', function () {
    return view('layouts.option2.products');
});

Route::get('/option2/Contact', function () {
    return view('layouts.option2.contact');
});








Route::get('/option3', function () {
    return view('layouts.option3.landing');
});

Route::get('/option3/Staff', function () {
    return view('layouts.option3.staff');
});

Route::get('/option3/Products', function () {
    return view('layouts.option3.products');
});

Route::get('/option3/Contact', function () {
    return view('layouts.option3.contact');
});











Route::get('/option4', function () {
    return view('layouts.option4.landing');
});

Route::get('/option4/Staff', function () {
    return view('layouts.option4.staff');
});

Route::get('/option4/Products', function () {
    return view('layouts.option4.products');
});

Route::get('/option4/Contact', function () {
    return view('layouts.option4.contact');
});














Route::get('/option5', function () {
    return view('layouts.option5.landing');
});

Route::get('/option5/Staff', function () {
    return view('layouts.option5.staff');
});

Route::get('/option5/Products', function () {
    return view('layouts.option5.products');
});

Route::get('/option5/Contact', function () {
    return view('layouts.option5.contact');
});

Route::get('/option5/Events', function () {
    return view('layouts.option5.events');
});


