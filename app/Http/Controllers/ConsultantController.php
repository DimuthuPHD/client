<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;

class ConsultantController extends Controller
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

        return view('consultant.index')->withUpcomingAppointments($upcomingAppointments)->withPastAppointments($pastAppointments)->withCancelledAppointments($cancelledAppointments);
    }

    public function profile()
    {
        $countries = $this->apiService->get('countries')['data']['data'];
        $jobTypes = $this->apiService->get('job-types')['data']['data'];
        $myCountries = $this->apiService->get('my-countries')['data'];
        $myJobTypes = $this->apiService->get('my-job-types')['data'];
        return view('consultant.profile')->withCountries($countries)->withJobTypes($jobTypes)->withMyCountries($myCountries)->withMyJobTypes($myJobTypes);
    }

    public function appointments(Request $request)
    {
        $page = $request->page ? '?page=' . $request->page : null;
        $url = $page ? 'my-appointments' . $page : 'my-appointments';
        $appointments = $this->apiService->get($url)['data']['appointments'];
        return view('consultant.appointments.index')->withAppointments($appointments);
    }

    public function updateprofile(Request $request)
    {
        $userId = authDetail('user.id');
        $data =  $request->except('_token');
        $updated = $this->apiService->post("consultant/{$userId}/update", $data)['data']['user'];
        $user = session()->get('auth_data');
        $user['user'] = $updated;
        session()->put('auth_data', $user);
        notify()->success('Profile Updated Successfully');
        return redirect()->route('consultant.dashboard');
    }


    public function createAppointment()
    {
        $avaialbleSlots = $this->apiService->get('get-available-slots')['data']['data'];
        $jobSeekers = $this->apiService->get('job-seekers')['data'];
        return view('consultant.appointments.create')->withAvaialbleSlots($avaialbleSlots)->withJobSeekers($jobSeekers);
    }

    public function StoreAppointment(Request $request)
    {
        $data = $request->except('_token', '_method');
        $data['consultant_id'] = authDetail('user.id');
        $appointment = $this->apiService->patch("appointment/store", $data);
        notify()->success('Appointment Created Successfully');
        return redirect()->route('consultant.appointments');
    }


    public function editAppointment($appointment)
    {
        $avaialbleSlots = $this->apiService->get('get-available-slots')['data']['data'];
        $jobSeekers = $this->apiService->get('job-seekers')['data'];
        $appointment = $this->apiService->get("appointment/{$appointment}")['data'];
        return view('consultant.appointments.edit')->withAppointment($appointment)->withAvaialbleSlots($avaialbleSlots)->withJobSeekers($jobSeekers);
    }

    public function updateAppointment($appointment, Request $request)
    {
        $data = $request->except('_token', '_method');
        $data['consultant_id'] = authDetail('user.id');
        $avaialbleSlots = $this->apiService->post("appointment/{$appointment}/update", $data);
        notify()->success('Appointment Updated Successfully');
        return redirect()->route('consultant.appointments');
    }
}
