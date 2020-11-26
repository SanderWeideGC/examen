@extends('backend.includes.layout')

@section('content')

    <div class="content p-4">
        <div class="controls">
            <h2 class="mb-4">Bewerk lid #{{ $user->id }}</h2>
            <hr>
        </div>

        <div class="card mb-4">
            <div class="card-body">

                <form method="POSt" action="/admin/leden/{{ $user->id }}">
                @csrf
                @method('PUT')

                    <div>
                        
                        <input placeholder="{{ $user->UserFirstname }}" value="{{ $user->UserFirstname }}" type="text" name="firstname" required>
                        <input placeholder="{{ $user->UserPrefix != '' ? $user->UserPrefix : 'Tussenvoegsel' }}" value="{{ $user->UserPrefix != '' ? $user->UserPrefix : 'Tussenvoegsel' }}" type="text" name="prefix">
                        <input placeholder="{{ $user->UserLastname }}" value="{{ $user->UserLastname }}" type="text" name="lastname" required>
                        <input placeholder="{{ $user->UserGender != '' ? $user->UserGender : 'Geslacht' }}" value="{{ $user->UserGender != '' ? $user->UserGender : 'Geslacht' }}" type="text" name="gender">
                        <input placeholder="{{ $user->UserBirthdate }}" value="{{ $user->UserBirthdate }}" type="date" name="birthdate" required>

                        @if ($errors->has('firstname')) <p class="error">{{ $errors->first('firstname') }}</p> @endif
                        @if ($errors->has('lastname')) <p class="error">{{ $errors->first('lastname') }}</p> @endif
                        @if ($errors->has('birthdate')) <p class="error">{{ $errors->first('birthdate') }}</p> @endif

                    </div>

                    <div>

                        <input placeholder="{{ $user->UserPhonenumber != '' ? $user->UserPhonenumber : '-' }}" value="{{ $user->UserPhonenumber != '' ? $user->UserPhonenumber : '-' }}" type="text" name="phonenumber">
                        <input placeholder="{{ $user->email }}" value="{{ $user->email }}" type="email" name="email" required>
                        
                        @if ($errors->has('email')) <p class="error">{{ $errors->first('email') }}</p> @endif

                    </div>
                            
                    <div>

                        <input placeholder="{{ $user->UserStreet }}" value="{{ $user->UserStreet }}" type="text" name="street" required>
                        <input placeholder="{{ $user->UserHousenumber }}" value="{{ $user->UserHousenumber }}" type="text" name="housenumber" required>
                        <input placeholder="{{ $user->UserPostalcode }}" value="{{ $user->UserPostalcode }}" type="text" name="postalcode" required>
                        <input placeholder="{{ $user->UserCity }}" value="{{ $user->UserCity }}" type="text" name="city" required>

                        @if ($errors->has('street')) <p class="error">{{ $errors->first('street') }}</p> @endif
                        @if ($errors->has('housenumber')) <p class="error">{{ $errors->first('housenumber') }}</p> @endif
                        @if ($errors->has('postalcode')) <p class="error">{{ $errors->first('postalcode') }}</p> @endif
                        @if ($errors->has('city')) <p class="error">{{ $errors->first('city') }}</p> @endif

                    </div>
                    
                    <input  placeholder="Wachtwoord" value="Wachtwoord" type="password" name="password" required>

                    @if ($errors->has('password')) <p class="error">{{ $errors->first('password') }}</p> @endif

                    <button type="submit">Oplaan</button>

                </form>

            </div>

        </div>

    </div>

@endsection