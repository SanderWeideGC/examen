@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Voornaam</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="userFirstName" value="{{ old('userFirstName') }}" required autocomplete="name" autofocus>

                                @error('userFirstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Tussenvoegsel</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="userPrefix" value="{{ old('userPrefix') }}" autocomplete="name" autofocus>

                                @error('userPrefix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Achternaam</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="userLastName" value="{{ old('userLastName') }}" required autocomplete="name" autofocus>

                                @error('userLastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Telefoonnummer</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="userPhonenumber" value="{{ old('userPhonenumber') }}" required autocomplete="name" autofocus>

                                @error('userPhonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Plaats</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control " name="userCity" value="{{ old('userCity') }}" required autocomplete="email">

                                @error('UserCity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Straat</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control " name="userStreet" value="{{ old('userStreet') }}" required autocomplete="email">

                                @error('userStreet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Huisnummer</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="userHousenumber" value="{{ old('userHousenumber') }}" required autocomplete="email">

                                @error('userHousenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Postcode</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="userPostalcode" value="{{ old('userPostalcode') }}" required autocomplete="email">

                                @error('userPostalcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Geslacht</label>

                            <div class="col-md-6">
                                <select name="userGender" class="form-control">
                                    <option value="" disabled selected>Selecteer</option>
                                    <option value="1" {{old('gender') == '1' ? 'selected' : ''}}>Man</option>
                                    <option value="2" {{old('gender') == '2' ? 'selected' : ''}}>Vrouw</option>
                                    <option value="3" {{old('gender') == '3' ? 'selected' : ''}}>Anders</option>
                                </select>
                                @error('userGender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Geboortedatum</label>

                            <div class="col-md-6">
                                <input id="email" type="date" class="form-control" name="userBirthdate" value="{{ old('userBirthdate') }}" required autocomplete="email">

                                @error('userBirthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Wachtwoord</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Herhaal Wachtwoord</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mailadres</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Registreer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
