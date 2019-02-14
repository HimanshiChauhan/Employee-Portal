<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobFormController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function home()
    {
        return view('home');
    }

    public function avail()
    {
        $job = Job::all();

        return view('job',compact('job'));
    }

    public function display()
    {
        $job = new Job;
        
        $job->title = request('title');
        $job->excerpt = request('excerpt');
        $job->location = request('location');
        $job->category = request('category');
        $job->description = request('description');

        $job->save();

        $job = Job::all();

        return view('job',compact('job'));
    }

    public function index()
    {
        return Job::all();
    }

    public function show(Job $job)
    {
        return $job;
    }
}
