@extends('backend.includes.layout')

@section('content')
    <div class="content p-4">
        <div class="controls">
            <h2 class="mb-4">Leden</h2>
            <hr>
            <a class="btn btn-dark btn-lg" href="leden/toevoegen" role="button"><i class="fas fa-plus-circle"></i> Toevoegen</a>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Geslacht</th>
                            <th>Geboortedatum</th>
                            <th>Telefoonnummer</th>
                            <th>E-mail</th>
                            <th>Adres</th>
                            <th>Postcode</th>
                            <th>Woonplaats</th>
                            <th class="actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->UserFirstname }} 
                                    {{ $user->UserPrefix != "" ? $user->UserPrefix ." " : "" }} 
                                    {{ $user->UserLastname }}
                                </td>
                                <td>{{ $user->UserGender }}</td>
                                <td>{{ $user->UserBirthdate }}</td>
                                <td>{{ $user->UserPhonenumber }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->UserStreet }} 
                                {{ $user->UserHousenumber }}</td>
                                <td>{{ $user->UserPostalcode }}</td>
                                <td>{{ $user->UserCity }}</td>
                                <td>
                                    <a href="leden/{{ $user->id }}/bewerken" class="btn btn-icon btn-pill btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-fw fa-edit"></i></a>
                                    <a href="leden/{{ $user->id }}/verwijderen" class="btn btn-icon btn-pill btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection