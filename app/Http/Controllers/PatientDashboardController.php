<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment; // make sure you have this model


class PatientDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Get upcoming appointments for this patient
        $appointments = Appointment::where('email', $user->email)
            ->whereDate('date', '>=', now())
            ->orderBy('date')
            ->take(5)
            ->get();

        // Count stats
        $upcomingCount = Appointment::where('email', $user->email)
            ->whereDate('date', '>=', now())
            ->count();

        $pastCount = Appointment::where('email', $user->email)
            ->whereDate('date', '<', now())
            ->count();

        return view('dashboard', compact(
            'appointments',
            'upcomingCount',
            'pastCount'
        ));
    }


}
