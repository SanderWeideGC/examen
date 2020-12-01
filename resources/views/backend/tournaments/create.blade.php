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
                <form method="POST" action="{{ route('tournaments.store') }}">
                @csrf
                <div class="row form-group">
                    <div class="col">
                        <label>Titel</label>
                        <input type="text" class="form-control" name="tournamentTitle" value="{{ old('tournamentTitle') }}" placeholder="Titel">
                        @error('tournamentTitle')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Omschrijving</label>
                        <input type="text" class="form-control" name="tournamentDescription" value="{{ old('tournamentDescription') }}" placeholder="Omschrijving">
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
                        <input type="date" class="form-control" name="tournamentCloseDate" value="{{ old('tournamentCloseDate') }}" placeholder="Inschrijf Deadline">
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
                            <option value="1" {{old('tournamentParticipantAmount') == '1' ? 'selected' : ''}}>4</option>
                            <option value="2" {{old('tournamentParticipantAmount') == '2' ? 'selected' : ''}}>8</option>
                            <option value="3" {{old('tournamentParticipantAmount') == '3' ? 'selected' : ''}}>16</option>
                            <option value="4" {{old('tournamentParticipantAmount') == '4' ? 'selected' : ''}}>32</option>
                            
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
                        <input type="date" class="form-control" name="tournamentStartDate" value="{{ old('tournamentStartDate') }}" placeholder="Startdatum">
                        @error('tournamentStartDate')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Einddatum</label>
                        <input type="date" class="form-control" name="tournamentEndDate" value="{{ old('tournamentEndDate') }}" placeholder="Einddatum">
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
