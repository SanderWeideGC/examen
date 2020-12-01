@extends('backend.includes.layout')

@section('content')

    <div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Lid #{{ $user->id }}</h2>
            <hr>
            <a class="btn btn-dark btn-lg" href="{{ $user->id }}/bewerken" role="button"><i class="fas fa-plus-circle"></i> Bewerken</a>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <tbody>
                    
                        <tr>
                            <td>Naam:</td>
                            <td>{{ $user->UserFirstname }} 
                                {{ $user->UserPrefix != "" ? $user->UserPrefix ." " : "" }} 
                                {{ $user->UserLastname }}
                            </td>
                        </tr>
                        <tr>
                            <td>Geslacht:</td>
                            <td>{{ $user->UserGender != "" ? $user->UserGender : "-" }}</td>
                        </tr>
                        <tr>
                            <td>Geboortedatum:</td>
                            <td>{{ $user->UserBirthdate }}</td>
                        </tr>
                        <tr>
                            <td>Telefoonnummer:</td>
                            <td>{{ $user->UserPhonenumber != "" ? $user->UserPhonenumber : "-" }}</td>
                        </tr>
                        <tr>
                            <td>E-mailadres</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>Adres:</td>
                            <td>{{ $user->UserStreet }} 
                            {{ $user->UserHousenumber }} 
                            <br> 
                            {{ $user->UserPostalcode }} 
                            {{ $user->UserCity }}</td>
                        </tr>
                                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection