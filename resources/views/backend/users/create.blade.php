@extends('backend.includes.layout')

@section('content')

    <div class="content p-4">
        <div class="controls">
            <h2 class="mb-4">Nieuw</h2>
            <hr>
        </div>

        <div class="card mb-4">
            <div class="card-body">

                <form method="POST" action="/admin/leden">
                @csrf

                    <div>
                        
                        <input placeholder="Voornaam" type="text" name="firstname" required>
                        <input placeholder="Tussenvoegsel" type="text" name="prefix" >
                        <input placeholder="Achternaam" type="text" name="lastname" required>
                        <input placeholder="Geslacht" type="text" name="gender">
                        <input placeholder="Geboortedatum" type="date" name="birthdate" required>

                        @if ($errors->has('firstname')) <p class="error">{{ $errors->first('firstname') }}</p> @endif
                        @if ($errors->has('lastname')) <p class="error">{{ $errors->first('lastname') }}</p> @endif
                        @if ($errors->has('birthdate')) <p class="error">{{ $errors->first('birthdate') }}</p> @endif

                    </div>

                    <div>

                        <input placeholder="Telefoonnummer" type="text" name="phonenumber">
                        <input placeholder="Email" type="email" name="email" required>
                        
                        @if ($errors->has('email')) <p class="error">{{ $errors->first('email') }}</p> @endif

                    </div>

                    <div>

                        <input placeholder="Straat" type="text" name="street" required>
                        <input placeholder="Huisnummer" type="text" name="housenumber" required>
                        <input placeholder="Postcode" type="text" name="postalcode" required>
                        <input placeholder="Woonplaats" type="text" name="city" required>

                        @if ($errors->has('street')) <p class="error">{{ $errors->first('street') }}</p> @endif
                        @if ($errors->has('housenumber')) <p class="error">{{ $errors->first('housenumber') }}</p> @endif
                        @if ($errors->has('postalcode')) <p class="error">{{ $errors->first('postalcode') }}</p> @endif
                        @if ($errors->has('city')) <p class="error">{{ $errors->first('city') }}</p> @endif

                    </div>
                    
                    <input placeholder="Wachtwoord" type="password" name="password" required>

                    @if ($errors->has('password')) <p class="error">{{ $errors->first('password') }}</p> @endif
                    
                    <button type="submit">Toevoegen</button>

                </form>

            </div>

        </div>

    </div>

@endsection