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

    public function appointments(Request $request)
    {
        $page = $request->page ? '?page=' . $request->page : null;
        $url = $page ? 'my-appointments' . $page : 'my-appointments';
        $appointments = $this->apiService->get($url)['data']['appointments'];
        return view('job-seeker.appointments.index')->withAppointments($appointments);
    }

    public function createAppointment()
    {

        $countries = $this->apiService->get('countries')['data']['data'];
        $jobTypes = $this->apiService->get('job-types')['data']['data'];
        $consultants = $this->apiService->get('consultants')['data']['user']['data'];
        return view('job-seeker.appointments.create')->withCountries($countries)->withJobTypes($jobTypes)->withConsultants($consultants);


        // $avaialbleSlots = $this->apiService->get('get-available-slots')['data']['data'];
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
        return view('job-seeker.appointments.edit')->withAppointment($appointment)->withAvaialbleSlots($avaialbleSlots)->withJobSeekers($jobSeekers);
    }

    public function updateAppointment($appointment, Request $request)
    {
        $data = $request->except('_token', '_method');
        $data['consultant_id'] = authDetail('user.id');
        $avaialbleSlots = $this->apiService->post("appointment/{$appointment}/update", $data);
        notify()->success('Appointment Updated Successfully');
        return redirect()->route('consultant.appointments');
    }

    public function availableSlots($consultantId)
    {
        $consultantId = ConsultantLogged() ? [] : ['consultant_id' => $consultantId];
        $avaialbleSlots =  $this->apiService->get('get-available-slots')['data']['data'];
        $view = view('job-seeker.appointments.slots', ['avaialbleSlots' => $avaialbleSlots])->render();
        return $view;
    }
}
