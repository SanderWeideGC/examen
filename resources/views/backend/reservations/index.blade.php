@extends('backend.includes.layout')

@section('content')
<div class="content p-4">
        <div class="controls">
            <h2 class="mb-4">Reserveringen</h2>
            <hr>
        <a class="btn btn-dark btn-lg" href="{{ route('reservations.create') }}" role="button"><i class="fas fa-plus-circle"></i> Toevoegen</a>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Reservering ID</th>
                            <th>Baan ID</th>
                            <th>Lid ID</th>
                            <th>Tijd</th>
                            <th>Datum</th>
                            <th class="actions">Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $reservations)
                            <tr>
                                <td>{{ $reservations->id }}</td>
                                <td>{{ $reservations->LaneID }}</td>
                                <td>{{ $reservations->UserID }}</td>
                                <td>{{ $reservations->ReservationTime }}</td>
                                <td>{{ $reservations->ReservationDate }}</td>
                                <td>
                                    <a href="#" class="btn btn-icon btn-pill btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-fw fa-edit"></i></a>
                                <a href="{{ route('reservations.destroy', $reservations) }}" class="btn btn-icon btn-pill btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection