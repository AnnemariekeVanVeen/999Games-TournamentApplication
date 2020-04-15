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
                            <h3 class="login-heading mb-4 text-center font-weight-bold">Inschrijven</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="first_name" type="text"
                                               class="form-control @error('first_name') is-invalid @enderror text-center"
                                               name="first_name"
                                               value="{{ old('first_name') }}" required autocomplete="first_name"
                                               autofocus
                                               placeholder="Voornaam">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="last_name" type="text"
                                               class="form-control @error('last_name') is-invalid @enderror text-center"
                                               name="last_name"
                                               value="{{ old('last_name') }}" required autocomplete="last_name"
                                               autofocus
                                               placeholder="Achternaam">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror text-center"
                                               name="email"
                                               value="{{ old('email') }}" required autocomplete="email"
                                               placeholder="Emailadres">

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
                                               name="password" required autocomplete="new-password"
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
                                        <input id="password-confirm" type="password" class="form-control text-center"
                                               name="password_confirmation" required autocomplete="new-password"
                                               placeholder="Wachtwoord herhalen">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="tournament_rules">
                                            <input id="tournament_rules" type="checkbox" class=""
                                                   name="tournament_rules" required autofocus> Ik ga akkoord met de
                                            <a href="#">toernooiregels</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="game_rules">
                                            <input id="game_rules" type="checkbox" class="" name="game_rules"
                                                   required autofocus> Ik ken de <a href="#">spelregels</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="prim-btn float-right">
                                            {{ __('Inschrijven') }}
                                        </button>
                                        <a href="/" class="mt-1">Terug naar home</a>
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
