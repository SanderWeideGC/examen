@extends('backend.includes.layout')

@section('content')
<div class="content p-4">
        <div class="controls">
            <h2 class="mb-4">Toernooien</h2>
            <hr>
            <a class="btn btn-dark btn-lg" href="{{ route('tournaments.create') }}" role="button"><i class="fas fa-plus-circle"></i> Toevoegen</a>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titel</th>
                            <th>Omschrijving</th>
                            <th>Deelnemers</th>
                            <th>Sluitdatum</th>
                            <th>Startdatum</th>
                            <th>Einddatum</th>
                            <th class="actions">Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tournaments as $tournaments)
                            <tr>
                                <td>{{ $tournaments->id }}</td>
                                <td>{{ $tournaments->TournamentTitle }}</td>
                                <td>{{ $tournaments->TournamentDescription }}</td>
                                <td>{{ $tournaments->formatParticipantAmount() }}</td>
                                <td>{{ $tournaments->TournamentCloseDate }}</td>
                                <td>{{ $tournaments->TournamentStartDate }}</td>
                                <td>{{ $tournaments->TournamentEndDate }}</td>
                                <td>
                                    <a href="{{ route('tournaments.edit', $tournaments) }}" class="btn btn-icon btn-pill btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-fw fa-edit"></i></a>
                                    <button class="btn btn-icon btn-pill btn-danger removeButton" data-id="{{ $tournaments->id }}" data-type="toernooien" data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection