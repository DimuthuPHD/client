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
        if (isset($auth['data'])) {
            session()->put('auth_data', $auth['data']);
            notify()->success('Welcome!');
            if (JobseekerLogged()) {
                return redirect()->route('jobSeeker.dashboard');
            } elseif (ConsultantLogged()) {
                return redirect()->route('consultant.dashboard');
            }
        }

        notify()->error('Invali Credentials. Please try again!');
        return redirect()->back();
    }


    public function logout()
    {

        $this->apiService->get('logout');
        session()->forget('auth_data');
        notify()->success('Successfully Logged out!');
        return redirect()->route('home');
    }

    public function showRegister()
    {
        return view('auth.register');
    }
}
