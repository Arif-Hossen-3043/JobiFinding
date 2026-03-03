<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;
use App\Models\contact;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});
//contact users

Route::post('/contact',function(){
    

request()->validate([
    'full-name'=> ['required','string','min:3'],
    'email'=>['required','string','email'],
    'message'=> ['required','string','min:5'],
    
    ]
    );

contact::create([
        'full-name'=>request('full-name'),
        'email'=>request('email'),
        'message'=>request('message'),

    ]);
    return redirect('/contact')->with('success','messAGE SEND ');
});


//create jobs
Route::get('/jobs/create-jobs', function () {
    return view('jobs.create-jobs');
}); //here through this view i am getting a page for inserting  data now to save the data in the database i need post route as my form is POST type and action is the jobs that i inserted 


// creating jobs 

Route::post('/jobs',function(){
    

JobListing::create([
        'name' => request('name'),
        'salary' => request('salary'),
        'description' => request('description'),
        'employer_id'=> 1,
    ]);
    return redirect('/jobs')->with('success','');
});

// always remeber as you use job{id }thats whyu mst use /job.create firsto laavel willcreraet eror as t wil find id as default 
//index to find all the posted jobs

Route::get('jobs', function () {
    $jobs = JobListing::latest()-> paginate(6); //to find all record use aall() instead ofpaginator / use links() to view jobs view file
    return view('jobs.index', compact('jobs'));
});

//amra jokhn code kori tokhn age show banai bt edit er code pore kori,,, kinto laravel a edit er route age dite hbe than show 

//show jobs to edit 
Route::get('/jobs/{id}/edit', function ($id) {
    $job = JobListing::findOrFail($id);
    return view('jobs.edit', compact('job'));
});
//show a specific job


Route::get('/jobs/{id}', function ($id) {
    $job = JobListing::findOrFail($id);
    return view('jobs.show', compact('job'));
});

//update jobs

Route::patch('/jobs/{id}', function ($id) {

    $job = JobListing::findOrFail($id);
//validation 
    $validated = request()->validate([
        'name' => ['required','min:3'],
        'salary' => ['required'],
        'description' => ['required','min:5'],
    ]);
//uppdate request 
    $job->update($validated);
//retunr to job 
    return redirect("/jobs/$id");

});


//delete a job and redirect to show 
Route::delete('jobs/{id}', function ($id) {
    JobListing::findOrFail($id)->delete();
    return redirect('/jobs')->with('success','');
    
});

