<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('userHome');
});

Route::get('/login', function () {
    return view('userLogIn');
});

Route::get('/register', function () {
    return view('userRegister');
});





Route::get('/adminDashboard', function () {
    return view('admin.adminDashboard');
});

Route::get('/adminLogin', function () {
    return view('admin.adminLogIn');
});


Route::get('/add', function () {
    return view('admin.adminAdd');
});

Route::get('/update', function () {
    return view('admin.adminUpdate');
});

