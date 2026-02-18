<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    $jobs = JobListing::all();
    return view('jobs', compact('jobs'));
});

Route::get('/jobs/{id}', function ($id) {
    $job = JobListing::findOrFail($id);
    return view('job', compact('job'));
});
