<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class JobFormController extends Controller
{
    public function show()
    {
        $jobs = new Job;
        
        $jobs->title = request('title');
        $jobs->excerpt = request('excerpt');
        $jobs->location = request('location');
        $jobs->category = request('category');
        $jobs->description = request('description');

        $jobs->save();

        $job = Job::all();

        return view('job',compact('job'));
    }

    public function home()
    {
        return view('home');
    }

    // public function avail()
    // {
    //     $job = Job::all();

    //     return view('job',compact('job'));
    // }
}
