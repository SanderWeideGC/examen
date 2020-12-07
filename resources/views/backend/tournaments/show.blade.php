@extends('backend.includes.layout')

@section('content')
<div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Toernooien</h2>
            <hr>
            <a class="btn btn-dark btn-lg" href="{{ route('tournaments.edit', $tournament) }}" role="button"><i class="fas fa-plus-circle"></i> Bewerken</a>
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
                    Deelnemers ({{ $count }}/{{ $tournament->formatParticipantAmount() }})
                </div>
                <div class="card-body">
                    @forelse($data as $info)
                        @foreach($info as $user)
                            <p class="tournamentParticipant">{{ $user->UserFirstname }} {{ $user->UserLastname }} <a href="{{ route('users.show', $user) }}"><i class="fas fa-eye"></i></a></p>
                        @endforeach
                    @empty
                        <p>Er zijn nog geen inschrijvingen voor dit toernooi.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
