<?php

namespace App\Http\Controllers;

class JobSeekerController extends Controller
{
    public function profile()
    {
        return view('job-seeker.profile');
    }

    public function appointments()
    {
        return view('job-seeker.appointments');
    }
}
