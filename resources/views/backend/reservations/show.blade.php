@extends('backend.includes.layout')

@section('content')
<div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Reserveringen</h2>
            <hr>
        </div>

        <div class="card mb-4">
            <div class="card-body table-responsive">
                <table id="" class="" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Reservering ID</th>
                            <th>Baan ID</th>
                            <th>Lid ID</th>
                            <th>Start tijd</th>
                            <th>Eind tijd</th>
                            <th>Datum</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $reservation->id }}</td>
                                <td>{{ $reservation->LaneID }}</td>
                                <td><a href="{{ route('users.show', $reservation->UserID) }}">{{ $reservation->UserID }}</a></td>
                                <td>{{ $reservation->ReservationStartTime }}</td>
                                <td>{{ $reservation->ReservationEndTime }}</td>
                                <td>{{ $reservation->ReservationDate }}</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection