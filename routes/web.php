<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/Contacts', function () {
    return view('Contacts');
});
Route::get('/Meet The Team', function () {
    return view('Team');
});
