@extends('layouts.userpanel')

@include('includes._error')

@section('content')
    <div class="container userdashboard">
        <div class="userdashboard-inner">
            <div class="row change-settings">
                <div class="col-12">
                    @if(session()->has('msg'))
                        <h6 class="alert alert-success text-center"> {{ session('msg') }}</h6>
                    @elseif(session()->has('alert'))
                        <h6 class="alert alert-danger text-center"> {{ session('alert') }}</h6>
                    @endif
                    <h1 class="title-margin">Profielinstellingen</h1>
                    <div class="settings">
                        <form action="{{ route('usersdashboard.update', ['usersdashboard' => $user]) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="change-name">
                                <div class="row">
                                    <div class="col-lg">
                                        <label for="first_name">
                                            <h2>Wijzig voornaam</h2>
                                        </label>
                                    </div>
                                    <div class="col-lg">
                                        <label for="last_name">
                                            <h2>Wijzig achternaam</h2>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg">
                                        <input type="text" id="first_name" name="first_name"
                                               value="{{ $user->first_name }}">
                                    </div>
                                    <div class="col-lg stubborn-input">
                                        <input type="text" id="last_name" name="last_name"
                                               value="{{ $user->last_name }}">
                                    </div>
                                    <input type="hidden" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="change-password">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="password">
                                            <h2>Wijzig wachtwoord</h2>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg">
                                        <input id="password" type="password" name="password"
                                               placeholder="Nieuw wachtwoord">
                                    </div>
                                    <div class="col-lg">
                                        <input type="password" name="password_confirmation"
                                               placeholder="Herhaal nieuw wachtwoord">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="scnd-btn"><input type="submit" value="Wijzigingen opslaan"></button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="row settings-sign-out">
                <div class="col-12">
                    <h2 class="h1">Uitschrijven</h2>
                    <h3>Ik wil mij graag uitschrijven van het NK Carcassonne</h3>
                    <form action="{{ route('usersdashboard.destroy', ['usersdashboard' => $user]) }}"
                          method="post">
                        @csrf
                        @method('DELETE')
                        <button class="scnd-btn"><input class="" type="submit" value="Uitschrijven" onclick="return confirm ('Weet je zeker dat je je wilt uitschrijven voor het NK?')"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
