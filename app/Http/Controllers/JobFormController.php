<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class JobFormController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function display()
    {
        $jobs = new Jobs;
        
        $jobs->title = request('title');
        $jobs->excerpt = request('excerpt');
        $jobs->location = request('location');
        $jobs->category = request('category');
        $jobs->description = request('description');

        $jobs->save();

        $job = Jobs::all();

        return view('job',compact('job'));
    }

    public function home()
    {
        return view('home');
    }

    public function avail()
    {
        $job = Jobs::all();

        return view('job',compact('job'));
    }

    public function index()
    {
        return Jobs::all();
    }

    public function show(Jobs $job)
    {
        return $job;
    }

    public function store(Request $request)
    {
        $job = Jobs::create($request->all());

        return response()->json($job, 201);
    }

    public function update(Request $request, Jobs $job)
    {
        $job->update($request->all());

        return response()->json($job, 200);
    }

    public function delete(Jobs $job)
    {
        $job->delete();

        return response()->json(null, 204);
    }
}
