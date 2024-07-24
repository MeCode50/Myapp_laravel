<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => [
        [
            "id"    =>  1,
            'title' => 'Frontend Developer',
            'salary' => '50,000',
        ],
         [
            "id"    =>    2,
            'title' => 'Backend Developer',
            'salary' => '100,000',
         ],
         [
            "id"    =>    3,
            'title' => 'Backend Developer',
            'salary' => '100,000',
        ]
    ]]);
});


Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            "id"    => 1,
            'title' => 'Frontend Developer',
            'salary' => '50,000',
        ],
        [
            "id"    => 2,
            'title' => 'Backend Developer',
            'salary' => '100,000',
        ],
        [
            "id"    => 3,
            'title' => 'Full Stack Developer',
            'salary' => '100,000',
        ],
    ];

    // find job by id 
    $job = collect($jobs)->firstWhere("id",$id);
    // Return the job data as JSON or a 404 error if not found
    if ($job) {
        return response()->json($job);
    } else {
        return response()->json(['error' => 'Job not found'], 404);
    }
    
});

Route::get('/contact', function () {
    return view('contact');
});


