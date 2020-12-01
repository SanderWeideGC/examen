@extends('backend.includes.layout')

@section('content')
<div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Reserveringen</h2>
            <hr>
        </div>
{{-- 
        <th>Baan ID</th>
        <th>Lid ID</th>
        <th>Tijd</th>
        <th>Datum</th> 
--}}

        <div class="card mb-4">
            <div class="card-header bg-white font-weight-bold">
                Reservering {{ $reservation->id }} bewerken
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('reservations.update', $reservation) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Baan ID</label>
                        <input type="text" class="form-control" name="reserveringBaanID" value="{{ $reservation->LaneID }}">
                        @error('reserveringBaanID')
                            <span class="invalidFeedback" role="alert">
                                <p>Dit veld is niet goed ingevuld</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Lid ID</label>
                        <input type="text" class="form-control" name="reserveringLidID" value="{{ $reservation->UserID }}">
                        @error('reserveringLidID')
                            <span class="invalidFeedback" role="alert">
                                <p>Dit veld is niet goed ingevuld</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tijd</label>
                        <input type="time" class="form-control" name="reserveringTime" step="1800" min="12:00" max="23:00" value="{{ $reservation->ReservationTime }}">
                        @error('reserveringTime')
                            <span class="invalidFeedback" role="alert">
                                <p>Dit veld is niet goed ingevuld</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Datum</label>
                        <input type="date" class="form-control" name="reserveringDate" placeholder="Datum" value="{{ $reservation->ReservationDate }}">
                        @error('reserveringDate')
                            <span class="invalidFeedback" role="alert">
                                <p>Dit veld is niet goed ingevuld</p>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                </form>
            </div>
        </div>
    </div>
@endsection