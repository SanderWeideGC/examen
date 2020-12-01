@extends('backend.includes.layout')

@section('content')

    <div class="content p-4">
        <div class="controls">
            <h2 class="mb-4">Bewerk lid</h2>
            <hr>
        </div>

        <div class="card mb-4">

            <div class="card-header bg-white font-weight-bold">
                Lid #{{ $user->id }}: {{ $user->UserFirstname }} {{ $user->UserPrefix != '' ? $user->UserPrefix : '' }} {{ $user->UserLastname }}
            </div>

            <div class="card-body">

                <form method="POST" action="/admin/leden/{{ $user->id }}">
                @csrf
                @method('PUT')

                    <div class="row form-group">
                        <div class="col">
                            <label>Voornaam</label>
                            <input type="text" class="form-control" name="firstname" value="{{ $user->UserFirstname }}" placeholder="Voornaam">
                            @error('firstname')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Tussenvoegsel</label>
                            <input type="text" class="form-control" name="prefix" value="{{ $user->UserPrefix != '' ? $user->UserPrefix : '' }}" placeholder="Tussenvoegsel">
                            @error('prefix')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Achternaam</label>
                            <input type="text" class="form-control" name="lastname" value="{{ $user->UserLastname }}" placeholder="Achternaam">
                            @error('lastname')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col">
                            <label>Birthdate</label>
                            <input type="date" class="form-control" name="birthdate" value="{{ $user->UserBirthdate }}" placeholder="dd/mm/yyy">
                            @error('birthdate')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Geslacht</label>
                            <select name="gender" class="form-control">
                                <option value="" disabled {{$user->UserBirthdate == '' ? 'selected' : ''}}>Selecteer</option>
                                <option value="man" {{$user->UserBirthdate == 'man' ? 'selected' : ''}}>Man</option>
                                <option value="vrouw" {{$user->UserBirthdate == 'vrouw' ? 'selected' : ''}}>Vrouw</option>
                                <option value="anders" {{$user->UserBirthdate == 'anders' ? 'selected' : ''}}>Anders</option>
                            </select>
                            @error('gender')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col">
                            <label>E-mailadres</label>
                            <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="E-mailadres">
                            @error('email')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Telefoonnummer</label>
                            <input type="text" class="form-control" name="phonenumber" value="{{ $user->UserPhonenumber != '' ? $user->UserPhonenumber : '' }}" placeholder="Telefoonnummer">
                            @error('phonenumber')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col">
                            <label>Straat</label>
                            <input type="text" class="form-control" name="street" value="{{ $user->UserStreet }}" placeholder="Straat">
                            @error('streets')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Huisnummer</label>
                            <input type="text" class="form-control" name="housenumber" value="{{ $user->UserHousenumber }}" placeholder="Huisnummer">
                            @error('housenumber')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col">
                            <label>Postcode</label>
                            <input type="text" class="form-control" name="postalcode" value="{{ $user->UserPostalcode }}" placeholder="Postcode">
                            @error('postalcode')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Woonplaats</label>
                            <input type="text" class="form-control" name="city" value="{{ $user->UserCity }}" placeholder="Woonplaats">
                            @error('city')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col">
                            <label>Wachtwoord</label>
                            <input type="password" class="form-control" name="password" value="{{ $user->password }}" placeholder="Wachtwoord">
                            @error('password')
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