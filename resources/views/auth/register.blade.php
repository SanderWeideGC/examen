@extends('frontend.authlayout')
@section('content')

<section class=innerpage_all_wrap>
    <div class="container auth">
        <div class=row><h2 class=heading>Registreer</h2>

            <div class="card-body authForm">
                <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row form-group">
                    <div class="col">
                        <label for="userFirstName" class="col-md-4 col-form-label text-md-right">Voornaam</label>
                        <input id="name" type="text" class="form-control " name="userFirstName" value="{{ old('userFirstName') }}" required autocomplete="name" autofocus>

                        @error('userFirstName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col">
                        <label for="userPrefix" class="col-md-4 col-form-label text-md-right">Tussenvoegsel</label>
                        <input id="name" type="text" class="form-control " name="userPrefix" value="{{ old('userPrefix') }}" autocomplete="name" autofocus>

                        @error('userPrefix')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col">
                        <label for="userLastName" class="col-md-4 col-form-label text-md-right">Achternaam</label>
                        <input id="name" type="text" class="form-control " name="userLastName" value="{{ old('userLastName') }}" required autocomplete="name" autofocus>

                        @error('userLastName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col">
                        <label for="userPhonenumber" class="col-md-4 col-form-label text-md-right">Telefoonnummer</label>
                        <input id="name" type="text" class="form-control " name="userPhonenumber" value="{{ old('userPhonenumber') }}" required autocomplete="name" autofocus>

                        @error('userPhonenumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col">
                        <label for="UuerCity" class="col-md-4 col-form-label text-md-right">Plaats</label>
                        <input id="email" type="text" class="form-control " name="userCity" value="{{ old('userCity') }}" required autocomplete="email">

                        @error('userCity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col">
                        <label for="userStreet" class="col-md-4 col-form-label text-md-right">Straat</label>
                        <input id="text" type="text" class="form-control " name="userStreet" value="{{ old('userStreet') }}" required autocomplete="email">

                        @error('userStreet')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col">
                        <label for="userHousenumber" class="col-md-4 col-form-label text-md-right">Huisnummer</label>
                        <input id="email" type="text" class="form-control" name="userHousenumber" value="{{ old('userHousenumber') }}" required autocomplete="email">

                        @error('userHousenumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col">
                        <label for="userPostalcode" class="col-md-4 col-form-label text-md-right">Postcode</label>
                        <input id="email" type="text" class="form-control" name="userPostalcode" value="{{ old('userPostalcode') }}" required autocomplete="email">

                        @error('userPostalcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col">
                        <label for="userGender" class="col-md-4 col-form-label text-md-right">Geslacht</label>
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

                <div class="row form-group">
                    <div class="col">
                        <label for="userBirthdate" class="col-md-4 col-form-label text-md-right">Geboortedatum</label>
                        <input id="userBirthdate" type="date" class="form-control" name="userBirthdate" value="{{ old('userBirthdate') }}" required autocomplete="email">

                        @error('userBirthdate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Wachtwoord</label>
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Herhaal Wachtwoord</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                        <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-red authButton">Registreer</button>
                <a class="btn btn-link passwordForget" href="{{ route('login') }}">Al een account?</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
