
<?php
use App\Models\contact;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


// home page
Route::get('/', function () {
    return view('home');
});


// contact page view
Route::get('/contact', function () {
    return view('contact');
});


// contact users (store contact form data)
Route::post('/contact', function () {

    // validation
    request()->validate([
        'full-name'=> ['required','string','min:3'],
        'email'=>['required','string','email'],
        'message'=> ['required','string','min:5'],
    ]);

    // create contact
    contact::create([
        'full-name'=>request('full-name'),
        'email'=>request('email'),
        'message'=>request('message'),
    ]);

    // redirect back with success message
    return redirect('/contact')->with('success','MESSAGE SEND');
});


/*
|--------------------------------------------------------------------------
| JOB ROUTES USING CONTROLLER
|--------------------------------------------------------------------------
| amra akhn job controller dia sob CRUD handle korbo
| CRUD = Create, Read, Update, Delete
*/


// index page to show all jobs
Route::get('/jobs', [JobController::class,'index']);


// go to create job page (form page)
Route::get('/jobs/create-jobs', [JobController::class,'create_jobs']);


// store a new job (form submit)
Route::post('/jobs', [JobController::class,'store']);


// show a specific job using id
// always remember {id} use korle show route edit er pore dite hbe
Route::get('/jobs/{id}', [JobController::class,'show']);


// edit page to edit a specific job
// edit route always show route er age dite hoy
Route::get('/jobs/{id}/edit', [JobController::class,'edit']);


// update a job using PATCH method
Route::patch('/jobs/{id}', [JobController::class,'update']);


// delete a specific job using id
Route::delete('/jobs/{id}', [JobController::class,'destroy']);

