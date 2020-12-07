@extends('frontend.authlayout')
@section('content')

<section class=innerpage_all_wrap>
    <div class="container auth">
        <div class=row><h2 class=heading>Login</h2>

            <div class="card-body authForm">
                <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row form-group">
                    <div class="col">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mailadres</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Wachtwoord</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">Onthoud mij</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-red authButton">Login</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link passwordForget" href="{{ route('password.request') }}">Wachtwoord Vergeten?</a>
                @endif
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
