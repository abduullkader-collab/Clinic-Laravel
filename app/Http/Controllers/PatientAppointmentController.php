<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Appointment;

class PatientAppointmentController extends Controller
{
    //
    public function add(Request $request)
{
    $appointment = new Appointment;
    $appointment->patientName = $request->patientName;
    $appointment->email = $request->email;
    $appointment->date = $request->date;
    $appointment->time = $request->time;
    $appointment->selectedDoctor = $request->selectedDoctor;

    if ($appointment->save()) {
        // Redirect to dashboard with a success message
        return redirect()->route('dashboard')
                         ->with('success', 'Your appointment has been booked successfully!');
    } else {
        // Redirect back with an error message
        return redirect()->back()
                         ->with('error', 'Appointment booking failed. Please try again.');
    }
}

    public function list()
{
    // Get the logged-in user
    $user = Auth::user();

    // Fetch only this user’s appointments
    $appointments = Appointment::where('email', $user->email)->get();

    return view('appointments.list', compact('appointments'));
}

}
