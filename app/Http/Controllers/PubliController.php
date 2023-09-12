<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;

class PubliController extends Controller
{

    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function consultantList(Request $request)
    {
        // return view('home.index');
        $data = $request->except('_token', '_method');
        $consultants = $this->apiService->get("consultants", $data);
        dd($consultants);
        notify()->success('Appointment Updated Successfully');
        return redirect()->route('consultant.appointments');
    }
}
