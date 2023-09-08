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
        return view('consultant.profile');
    }

    public function appointments(Request $request)
    {
        $page = $request->page ? '?page=' . $request->page : null;
        $url = $page ? 'my-appointments' . $page : 'my-appointments';
        $appointments = $this->apiService->get($url)['data']['appointments'];
        return view('consultant.appointments')->withAppointments($appointments);
    }
}
