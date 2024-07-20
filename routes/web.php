<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['jobs' => [
        [
            'id' => 1,
            'title' => 'Frontend Developer',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'location' => 'New York, USA',
            'created_at' => now()
        ],
         [
            'id' => 2,
            'title' => 'Backend Developer',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'location' => 'Texas',
            'created_at' => now()
        ]
    ]]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
