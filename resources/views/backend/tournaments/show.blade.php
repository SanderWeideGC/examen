@extends('backend.includes.layout')

@section('content')
<div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Toernooien</h2>
            <hr>
        </div>
        <div class="row tournamentRow">
            <div class="card col mr-4">
                <div class="card-header bg-white font-weight-bold">
                    Toernooi Informatie
                </div>
                <div class="card-body">
                    <p><b>Titel: </b>{{ $tournament->TournamentTitle }}</p>
                    <p><b>Omschrijving: </b> {{ $tournament->TournamentDescription }}</p>
                    <p><b>Deadline: </b> {{ $tournament->formatCloseDate() }}</p>
                    <p><b>Begindatum: </b> {{ $tournament->formatStartDate() }}</p>
                    <p><b>Einddatum: </b> {{ $tournament->formatEndDate() }}</p>
                </div>
            </div>
            <div class="card col mr-4">
                <div class="card-header bg-white font-weight-bold">
                    Toernooi Deelnemers
                </div>
                <div class="card-body">
                    @foreach($data as $info) 

                        @foreach($info as $user)
                            <p class="tournamentParticipant">{{ $user->UserFirstname }} {{ $user->UserLastname }} <a href="#"><i class="fas fa-eye"></i></a></p>
                        @endforeach

                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
