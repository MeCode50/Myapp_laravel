<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['jobs' => [
        [
            'title' => 'Frontend Developer',
            'salary' => '50,000',
        ],
         [
            'title' => 'Backend Developer',
            'salary' => '100,000',
        ]
    ]]);
});

Route::get('/jobs', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
