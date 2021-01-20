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
            <select id="reservationLane" name="reservationLane">
            <option value="" disabled selected>selecteer een baan</option>
            @foreach ($lanes as $lane)
            @if ($lane->LaneStatus == 1)
                <option value="{{ $lane->id }}">{{ $lane->LaneName }}</option>
            @endif
                
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Start tijd</label>
            <select id="time" name="reserveringStartTime">
            <option value="" disabled selected>kies een tijd</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
@endsection
