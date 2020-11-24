@extends('backend.includes.layout')

@section('content')
<div class="content p-4">
        <div class="controls">
            <h2 class="mb-4">Banen</h2>
            <hr>
            <a class="btn btn-dark btn-lg" href="#" role="button"><i class="fas fa-plus-circle"></i> Toevoegen</a>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Baancode</th>
                            <th>Naam</th>
                            <th>Categorie</th>
                            <th>Ligging</th>
                            <th>Lengte</th>
                            <th>Breedte</th>
                            <th>Vloer</th>
                            <th>Baancheck datum</th>
                            <th>Baanservice datum</th>
                            <th>Status</th>
                            <th class="actions">Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lanes as $lanes)
                            <tr>
                                <td>{{ $lanes->id }}</td>
                                <td>{{ $lanes->LaneName }}</td>
                                <td>{{ $lanes->LaneCategory }}</td>
                                <td>{{ $lanes->LanePositioning }}</td>
                                <td>{{ $lanes->LaneLenght }}</td>
                                <td>{{ $lanes->LaneWidth }}</td>
                                <td>{{ $lanes->LaneFlooring }}</td>
                                <td>{{ $lanes->LaneLastCheck }}</td>
                                <td>{{ $lanes->LaneLastService }}</td>
                                <td>{{ $lanes->LaneStatus }}</td>
                                <td>
                                    <a href="#" class="btn btn-icon btn-pill btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-fw fa-edit"></i></a>
                                    <a href="#" class="btn btn-icon btn-pill btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection