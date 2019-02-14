<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class ApplicantController extends Controller
{
    public function store(Request $request)
    {
        $applicant = new Applicant();

        $applicant->firstname = request('firstname');
        $applicant->lastname = request('lastname');
        $applicant->email = request('email');
        $applicant->phonenumber = request('phonenumber');
        $applicant->college = request('college');
        $applicant->graduationyear = request('graduationyear');
        $applicant->course = request('course');
        $applicant->linkedinurl = request('linkedinurl');
        $applicant->reason = request('reason');

        if($resume = $request->file('resume'))
        {
            $name = $resume->getClientOriginalName();
            if($resume->move('applicantsResume', $name))
            {
                $applicant->resume = $name;
            }
        }

        $applicant->save();
        return response()->json($applicant, 200);
    }
}
