<?php

namespace App\Http\Controllers;
use App\Models\JobListing;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
public function create_jobs(){
    return view("jobs.create-jobs");
}
    public function index()
    {
        $jobs = JobListing::latest()->paginate(6);
        return view('jobs.index', compact('jobs'));
    }


    public function store(Request $request)
    {
    
JobListing::create([

        'name' => request('name'),
        'salary' => request('salary'),
        'description' => request('description'),
        'employer_id'=> 1,
    ]);
    return redirect('/jobs')->with('success','');
    }
    //edit page to edit 
public function edit($id){

    $job = JobListing::findOrFail($id);
    return view('jobs.edit', compact('job'));
}

    //show
    public function show($id){
        $job=JobListing::findOrFail($id);
        return view('jobs.show', compact('job'));
    }

//update a job

public function update($id){
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
}
public function destroy($id){
    $job = JobListing::findOrFail($id);
    $job->delete();

    return redirect('/jobs')->with('success','Job Deleted Successfully');
}
}
