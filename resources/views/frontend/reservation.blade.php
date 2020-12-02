@extends('frontend.layout')
@section('header-title')
    Baan reserveren
@endsection
@section('content')
<form method="POST" action="{{ route('user.reservations.store') }}">
        @csrf
        <label>Datum</label>
        <div class="form-group">
            <select id="reservationDate" name="reservationDate">
            <option value="" disabled selected>selecteer een dag</option>
            <option value="{{ date('Y-m-d', strtotime(date('Y-m-d'))) }}">{{ date('Y-m-d', strtotime(date('Y-m-d'))) }}</option>
            <option value="{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +1 day')) }}">{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +1 day')) }}</option>
            <option value="{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +2 day')) }}">{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +2 day')) }}</option>
            <option value="{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +3 day')) }}">{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +3 day')) }}</option>
            <option value="{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +4 day')) }}">{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +4 day')) }}</option>
            <option value="{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +5 day')) }}">{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +5 day')) }}</option>
            <option value="{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +6 day')) }}">{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +6 day')) }}</option>
            <option value="{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +7 day')) }}">{{ date('Y-m-d', strtotime(date('Y-m-d') . ' +7 day')) }}</option>
            </select>
        </div>
        <label>Baan ID</label>
        <div class="form-group">
            <select id="reservationLane">
            <option value="" disabled selected>selecteer een baan</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            </select>
        </div>
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
            <select id="time" name="reserveringStartTime"></select>
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
@endsection
