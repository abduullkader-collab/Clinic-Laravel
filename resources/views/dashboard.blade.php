@extends('layouts.app')

@section('title', 'Dashboard')



@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle me-2"></i> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="container mt-5">
    <!-- Welcome Section -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Welcome, {{ Auth::user()->name }} 👋</h2>
        <p class="text-muted fs-5">Here’s a quick overview of your appointments</p>
    </div>

    <!-- Quick Stats -->
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 h-100 text-white rounded-4" 
                 style="background: linear-gradient(135deg, #007bff, #00c6ff); transition: transform .2s;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                    <i class="bi bi-calendar-check display-4 mb-3"></i>
                    <h5 class="card-title">Upcoming Appointments</h5>
                    <p class="card-text fs-1 fw-bold">{{ $upcomingCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-lg border-0 h-100 text-white rounded-4" 
                 style="background: linear-gradient(135deg, #28a745, #85e085); transition: transform .2s;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                    <i class="bi bi-clock-history display-4 mb-3"></i>
                    <h5 class="card-title">Past Visits</h5>
                    <p class="card-text fs-1 fw-bold">{{ $pastCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Appointments -->
    <div class="card shadow border-0 rounded-4">
        <div class="card-header bg-primary text-white py-3 rounded-top-4">
            <h5 class="mb-0 fw-bold"><i class="bi bi-list-check me-2"></i> My Upcoming Appointments</h5>
        </div>
        <div class="card-body">
            @if($appointments->isEmpty())
                <div class="alert alert-info text-center mb-0 rounded-3 shadow-sm">
                    <i class="bi bi-info-circle me-2"></i> You don’t have any upcoming appointments.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th><i class="bi bi-person-badge me-1"></i> Doctor</th>
                                <th><i class="bi bi-calendar-event me-1"></i> Date</th>
                                <th><i class="bi bi-clock me-1"></i> Time</th>
                                <th><i class="bi bi-check2-circle me-1"></i> Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointments as $appointment)
                            <tr>
                                <td class="fw-semibold">{{ $appointment->selectedDoctor }}</td>
                                <td>{{ \Carbon\Carbon::parse($appointment->date)->format('d M Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($appointment->time)->format('h:i A') }}</td>
                                <td>
                                    <span class="badge rounded-pill px-3 py-2
                                        @if($appointment->status == 'confirmed') bg-success 
                                        @elseif($appointment->status == 'pending') bg-warning text-dark
                                        @else bg-secondary @endif">
                                        {{ ucfirst($appointment->status) }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Small CSS tweak for hover animation -->
<style>
    .card:hover {
        transform: translateY(-5px);
    }
</style>
@endsection