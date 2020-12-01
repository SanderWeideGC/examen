@extends('backend.includes.layout')

@section('content')

    <div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Nieuw lid toevoegen</h2>
            <hr>
        </div>

        <div class="card mb-4">

            <div class="card-header bg-white font-weight-bold">
                Nieuw lid
            </div>

            <div class="card-body">

                <form method="POST" action="/admin/leden">
                @csrf

                    <div class="row form-group">
                        <div class="col">
                            <label>Voornaam</label>
                            <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="Voornaam">
                            @error('firstname')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Tussenvoegsel</label>
                            <input type="text" class="form-control" name="prefix" value="{{ old('prefix') }}" placeholder="Tussenvoegsel">
                            @error('prefix')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Achternaam</label>
                            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Achternaam">
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
                            <input type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}" placeholder="dd/mm/yyy">
                            @error('birthdate')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Geslacht</label>
                            <select name="gender" class="form-control">
                                <option value="" disabled selected>Selecteer</option>
                                <option value="1" {{old('gender') == '1' ? 'selected' : ''}}>Man</option>
                                <option value="2" {{old('gender') == '2' ? 'selected' : ''}}>Vrouw</option>
                                <option value="3" {{old('gender') == '3' ? 'selected' : ''}}>Anders</option>
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
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mailadres">
                            @error('email')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Telefoonnummer</label>
                            <input type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="Telefoonnummer">
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
                            <input type="text" class="form-control" name="street" value="{{ old('street') }}" placeholder="Straat">
                            @error('streets')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Huisnummer</label>
                            <input type="text" class="form-control" name="housenumber" value="{{ old('housenumber') }}" placeholder="Huisnummer">
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
                            <input type="text" class="form-control" name="postalcode" value="{{ old('postalcode') }}" placeholder="Postcode">
                            @error('postalcode')
                                <span class="invalidFeedback" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Woonplaats</label>
                            <input type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="Woonplaats">
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
                            <input type="password" class="form-control" name="password" value="{{ old('postalcode') }}" placeholder="Wachtwoord">
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