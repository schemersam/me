<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home', [
        'jobs'=>[
            [
                'title'=>'Director',
                'salary'=>'$500,000',
            ],
            [
                'title'=> 'Programmer',
                'salary'=> '$40,000',
            ],
            [
                'title'=> 'Teacher',
                'salary'=> '20,000',
            ]
        ]
    ]);
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
