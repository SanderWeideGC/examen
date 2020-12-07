@extends('backend.includes.layout')

@section('content')
<div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Banen</h2>
            <hr>
            <a class="btn btn-dark btn-lg" href="{{ route('lanes.edit', $lane) }}" role="button"><i class="fas fa-plus-circle"></i> Bewerken</a>
        </div>
        <div class="row tournamentRow">
            <div class="card col mr-4">
                <div class="card-header bg-white font-weight-bold">
                    Baan Informatie
                </div>
                <div class="card-body">
                    <p><b>Naam: </b>{{ $lane->LaneName }}</p>
                    <p><b>Categorie: </b> {{ $lane->formatCategory() }}</p>
                    <p><b>Ligging: </b> {{ $lane->formatPositioning() }}</p>
                    <p><b>Lengte: </b> {{ $lane->LaneLenght }}</p>
                    <p><b>Breedte: </b> {{ $lane->LaneWidth }}</p>
                    <p><b>Vloer: </b> {{ $lane->LaneFlooring }}</p>
                    <p><b>Baancheck: </b> {{ $lane->LaneLastCheck }}</p>
                    <p><b>Baanservice: </b> {{ $lane->LaneLastService }}</p>
                    <p><b>Status: </b> {{ $lane->formatStatus() }}</p>
                </div>
            </div>
            <div class="card col mr-4">
                <div class="card-header bg-white font-weight-bold">
                    Reserveringen
                </div>
                <div class="card-body">
                    @forelse($reservations as $reservation)
                        <p class="tournamentParticipant">
                            <span class="reservationDate">{{ $reservation->formatReservationDate() }}</span>
                            <span>{{ $reservation->formatStartTime() }} - {{ $reservation->formatEndTime() }}</span>
                            <a href="{{ route('reservations.show', $reservation) }}"><i class="fas fa-eye"></i></a>
                        </p>
                    @empty
                        <p>Er zijn nog geen reserveringen voor deze baan.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
