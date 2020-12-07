@extends('backend.includes.layout')

@section('content')
<div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Banen</h2>
            <hr>
            <a class="btn btn-dark btn-lg" href="{{ route('lanes.create') }}" role="button"><i class="fas fa-plus-circle"></i> Toevoegen</a>
        </div>

        <div class="card mb-4">
            <div class="card-body table-responsive">
                <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Naam</th>
                            <th>Categorie</th>
                            <th>Ligging</th>
                            <th>Lengte</th>
                            <th>Breedte</th>
                            <th>Vloer</th>
                            <th>Baancheck</th>
                            <th>Baanservice</th>
                            <th>Status</th>
                            <th class="actions">Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lanes as $lanes)
                            <a href="{{ route('lanes.show', $lanes) }}">
                                <tr>
                                    <td>{{ $lanes->id }}</td>
                                    <td>{{ $lanes->LaneName }}</td>
                                    <td>{{ $lanes->formatCategory() }}</td>
                                    <td>{{ $lanes->formatPositioning() }}</td>
                                    <td>{{ $lanes->LaneLenght }}</td>
                                    <td>{{ $lanes->LaneWidth }}</td>
                                    <td>{{ $lanes->LaneFlooring }}</td>
                                    <td>{{ $lanes->LaneLastCheck }}</td>
                                    <td>{{ $lanes->LaneLastService }}</td>
                                    <td>{{ $lanes->formatStatus() }}</td> 
                                    <td>
                                        <a href="{{ route('lanes.show', $lanes) }}" class="btn btn-icon btn-pill btn-info" data-toggle="tooltip" title="Show"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('lanes.edit', $lanes) }}" class="btn btn-icon btn-pill btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-fw fa-edit"></i></a>
                                        <button class="btn btn-icon btn-pill btn-danger removeButton" data-id="{{ $lanes->id }}" data-type="banen" data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-trash"></i></button>
                                    </td>
                                </tr>
                            </a>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection