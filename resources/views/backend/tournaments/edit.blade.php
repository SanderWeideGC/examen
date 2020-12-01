@extends('backend.includes.layout')

@section('content')
<div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Toernooien</h2>
            <hr>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-white font-weight-bold">
                Nieuw Toernooi
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('tournaments.update', $tournament) }}">
                @csrf
                @method('PUT')

                <div class="row form-group">
                    <div class="col">
                        <label>Titel</label>
                        <input type="text" class="form-control" name="tournamentTitle" value="{{ $tournament->TournamentTitle }}" placeholder="Titel">
                        @error('tournamentTitle')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Omschrijving</label>
                        <input type="text" class="form-control" name="tournamentDescription" value="{{ $tournament->TournamentDescription }}" placeholder="Omschrijving">
                        @error('tournamentDescription')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label>Inschrijf Deadline</label>
                        <input type="date" class="form-control" name="tournamentCloseDate" value="{{ $tournament->TournamentCloseDate }}" placeholder="Inschrijf Deadline">
                        @error('tournamentCloseDate')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Max. Aantal Deelnemers</label>
                        <select name="tournamentParticipantAmount" class="form-control">
                            <option value="" disabled selected>Kies het aantal</option>
                            <option value="1" {{$tournament->TournamentParticipantAmount == '1' ? 'selected' : ''}}>4</option>
                            <option value="2" {{$tournament->TournamentParticipantAmount == '2' ? 'selected' : ''}}>8</option>
                            <option value="3" {{$tournament->TournamentParticipantAmount == '3' ? 'selected' : ''}}>16</option>
                            <option value="4" {{$tournament->TournamentParticipantAmount == '4' ? 'selected' : ''}}>32</option>
                            
                        </select>
                        @error('tournamentParticipantAmount')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label>Startdatum</label>
                        <input type="date" class="form-control" name="tournamentStartDate" value="{{ $tournament->TournamentStartDate }}" placeholder="Startdatum">
                        @error('tournamentStartDate')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Einddatum</label>
                        <input type="date" class="form-control" name="tournamentEndDate" value="{{ $tournament->TournamentEndDate }}" placeholder="Einddatum">
                        @error('tournamentEndDate')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Opslaan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
