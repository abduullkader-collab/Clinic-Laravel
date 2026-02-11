@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Appointments</h2>

    @if($appointments->isEmpty())
        <div class="alert alert-info">
            You don’t have any appointments booked yet.
        </div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->selectedDoctor }}</td>
                    <td>{{ \Carbon\Carbon::parse($appointment->date)->format('d M Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($appointment->time)->format('h:i A') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection