<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('list', 'zzz');
// });

Route::view('/{any}', 'layouts.app')->where('any', '.*');


// Route::view('changePassword/{token}', 'Authentication.changePassword');

// Route::view('forgetPassword', 'Authentication.forgetPassword');

// Route::view('registration', 'Authentication.registration');

// Route::view('login', 'Authentication.login')->name('login');

// Route::view('codePage', 'Authentication.codePage');

// Route::view('/', 'Students.index');

// Route::view('addUser', 'Students.create');

// Route::view('Edit', 'Students.edit');



    








