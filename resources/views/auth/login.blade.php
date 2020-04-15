<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NK Carcassonne</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">

<body>
<!-- Login -->
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{asset('storage/img/carcassonne-main-logo.png')}}" height="80" width="220" class="mt-4"
                         style="object-fit: contain">
                </a>
            </div>
        </div>
        <div class="col-md-8 col-lg-6 bg-white m-0 p-0">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto mt-5">
                            <h3 class="login-heading mb-4 text-center font-weight-bold">Inloggen</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">


                                    <div class="col-md-12 justify-content-center">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror text-center"
                                               name="email" value="{{ old('email') }}" required autocomplete="email"
                                               autofocus placeholder="Emailadres">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">


                                    <div class="col-md-12">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror text-center"
                                               name="password" required autocomplete="current-password"
                                               placeholder="Wachtwoord">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-check text-center">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Onthoud mij') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-check text-center">
                                            @if (Route::has('password.request'))
                                                Wachtwoord vergeten?
                                                <a class=""
                                                   href="{{ route('password.request') }}">
                                                    {{ __('Klik hier!') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-check text-center">
                                            Wil je deelnemen? <a href="{{ route('register') }}">Schrijf je in!</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="prim-btn float-right">
                                            {{ __('Inloggen') }}
                                        </button>
                                        <a href="{{ url('/') }}" class="mt-1">Terug naar home</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

