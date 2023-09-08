<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Services\ApiService;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }


    public function showLogin()
    {
        if (isLoggedIn()) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $auth = $this->apiService->post('login', $request->validated());
        session()->put('auth_data', $auth['data']);

        if (JobseekerLogged()) {
            return redirect()->route('jobSeeker.dashboard');
        } elseif (ConsultantLogged()) {
            return redirect()->route('consultant.dashboard');
        }
    }


    public function logout()
    {

        $this->apiService->get('logout');
        session()->forget('auth_data');
        return redirect()->route('home');
    }

    public function showRegister()
    {
        return view('auth.register');
    }
}
