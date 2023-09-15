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
        $data = $request->except('_token', '_method');
        $consultants = $this->apiService->get("consultants", $data)['data']['data'];
        $countries = $this->apiService->get('countries')['data']['data'];
        $jobTypes = $this->apiService->get('job-types')['data']['data'];
        return view('public.consultants')->withConsultants($consultants)->withCountries($countries)->withJobTypes($jobTypes);
    }

    public function consultanShow($consultant_id)
    {
        $consultant = $this->apiService->get("consultants/" . $consultant_id)['data'];
        return view('public.consultant_show')->withConsultant($consultant);
    }
}
