<?php

namespace App\Http\Controllers;

class ConsultantController extends Controller
{
    public function profile()
    {
        return view('consultant.profile');
    }

    public function appointments()
    {
        return view('consultant.appointments');
    }
}
