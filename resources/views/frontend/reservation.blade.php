@extends('frontend.layout')
@section('header-title')
    Baan reserveren
@endsection
@section('content')
    <form method="POST" action="">
        @csrf
        <div class="form-group">
            <label>Baan ID</label>
            <input type="text" class="form-control" name="reserveringBaanID" placeholder="Baan ID">
            @error('reserveringBaanID')
                <span class="invalidFeedback" role="alert">
                    <p>Dit veld is niet goed ingevuld</p>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Lid ID</label>
            <input type="text" class="form-control" name="reserveringLidID" placeholder="Lid ID">
            @error('reserveringLidID')
                <span class="invalidFeedback" role="alert">
                    <p>Dit veld is niet goed ingevuld</p>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Start tijd</label>
            <input type="time" class="form-control" name="reserveringStartTime" step="1800" min="12:00" max="23:00">
            @error('reserveringStartTime')
                <span class="invalidFeedback" role="alert">
                    <p>Dit veld is niet goed ingevuld</p>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Eind tijd</label>
            <input type="time" class="form-control" name="reserveringEndTime" step="1800" min="12:00" max="23:00">
            @error('reserveringEndTime')
                <span class="invalidFeedback" role="alert">
                    <p>Dit veld is niet goed ingevuld</p>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Datum</label>
            <input type="date" class="form-control" name="reserveringDate" placeholder="Datum">
            @error('reserveringDate')
                <span class="invalidFeedback" role="alert">
                    <p>Dit veld is niet goed ingevuld</p>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
@endsection
