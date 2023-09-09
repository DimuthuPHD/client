<?php

namespace App\Http\Controllers;

use App\Http\Requests\Jobseeker\UpdateProfileRequest;
use App\Services\ApiService;
use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function index()
    {
        $appointments = $this->apiService->get('my-appointments');
        $appointments = collect($appointments['data']['appointments']['data']);

        $currentDateTime = now();
        $upcomingAppointments = $appointments->filter(function ($appointment) use ($currentDateTime) {
            $appointmentDateTime = $appointment['date'] . ' ' . $appointment['from'];
            $appointmentDateTime = \Carbon\Carbon::parse($appointmentDateTime);

            return $appointmentDateTime >= $currentDateTime && $appointment['status'] !== 'cancelled';
        })->take(5);

        $pastAppointments = $appointments->filter(function ($appointment) use ($currentDateTime) {
            $appointmentEndDateTime = $appointment['date'] . ' ' . $appointment['to'];
            $appointmentEndDateTime = \Carbon\Carbon::parse($appointmentEndDateTime);

            return $appointmentEndDateTime < $currentDateTime;
        })->take(5);


        $cancelledAppointments = $appointments->filter(function ($appointment) use ($currentDateTime) {
            return $appointment['status'] == 'cancelled';
        })->take(5);

        return view('job-seeker.index')->withUpcomingAppointments($upcomingAppointments)->withPastAppointments($pastAppointments)->withCancelledAppointments($cancelledAppointments);
    }

    public function profile()
    {
        return view('job-seeker.profile');
    }

    public function appointments(Request $request)
    {
        $page = $request->page ? '?page=' . $request->page : null;
        $url = $page ? 'my-appointments' . $page : 'my-appointments';
        $appointments = $this->apiService->get($url)['data']['appointments'];
        return view('job-seeker.appointments')->withAppointments($appointments);
    }


    public function updateprofile(Request $request)
    {
        $userId = authDetail('user.id');
        $data =  $request->except('_token');
        $updated = $this->apiService->post("job-seeker/{$userId}/update", $data)['data']['user'];
        $user = session()->get('auth_data');
        $user['user'] = $updated;
        notify()->success('User Details Updated!');
        session()->put('auth_data', $user);

        return redirect()->route('jobSeeker.dashboard')->withSuccess('Profile Updated Successfully');
    }
}
