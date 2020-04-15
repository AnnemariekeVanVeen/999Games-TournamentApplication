@extends('layouts.app')

@section('content')
    <div class="bg-header-home">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 my-auto">
                    <h1 class="">Neem deel aan het avontuur!</h1>
                    <p>Interesse in deelnemen aan het NK Carcassonne, met de meest ervaren spelers van Nederland?</p>
                    <button class="prim-btn"><a href="{{ route('register') }}">Schrijf je in!</a></button>
                </div>
                <div class="col-lg-6 h-100">
                    <img class="h-100" src="{{ asset('storage/img/carcassonne-ridder-gespiegeld.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="container content-home">
        <div class="row justify-content-between paper-home">
            <div class="col-sm paper">
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-top222.png') }}">
                <div class="bg-paper d-flex justify-content-center align-items-center">
                    <div class="paper-content">
                        <img src="{{ asset('storage/img/map-icon.png') }}">
                        <h2 class="font-weight-bold text-center">Plattegrond</h2>
                        <a href="#"><h5 class="text-center m-0">Klik hier!</h5></a>
                    </div>
                </div>
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-bottom222.png') }}">
            </div>
            <div class="col-sm paper">
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-top222.png') }}">
                <div class="bg-paper d-flex justify-content-center align-items-center">
                    <div class="paper-content">
                        <img src="{{ asset('storage/img/timer-icon.png') }}">
                        <h2 class="font-weight-bold text-center">Ronde tijd</h2>
                        <h5 class="text-center m-0">45:00</h5>
                    </div>
                </div>
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-bottom222.png') }}">
            </div>
            <div class="col-sm paper">
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-top222.png') }}">
                <div class="bg-paper d-flex justify-content-center align-items-center">
                    <div class="paper-content">
                        <img src="{{ asset('storage/img/star-icon.png') }}">
                        <h2 class="font-weight-bold text-center">Sterspeler</h2>
                        <h5 class="text-center m-0">Bertie</h5>
                    </div>
                </div>
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-bottom222.png') }}">
            </div>
        </div>
        <div class="row justify-content-between home-rules">
            <a href="{{ url('nk-rules') }}" class="text-decoration-none col-lg rules-block bg-rules-1">
                    <h4 class="text-center font-weight-semibold">Bekijk de toernooiregels</h4>
            </a>
            <a href="{{ url('gamerules') }}" class="text-decoration-none col-lg rules-block bg-rules-2">
                    <h4 class="text-center font-weight-semibold">Bekijk de spelregels</h4>
            </a>
        </div>
    </div>
    @include('includes.c2a')
    <div class="container">
        <div class="row d-flex justify-content-between news-feed align-content-lg-center">
                <div class="col-8 d-inline-block main_feed">
                   <a href="{{(route('newsfeed'))}}"> <img src="{{asset('storage/img/Carcassonne_spel-1024x576.jpg')}}"> </a>
                <div class="news-title-main">
                    <p class="font-weight-semibold">{{$first->created_at->format('d-m-y')}}</p>
                    <a class="text-decoration-none" href="{{(route('newsfeed'))}}"><h3 class="font-weight-semibold">{{$first->title}} </h3></a>
                </div>
            </div>
            <div class="col-4 d-inline-block">
                <div class=" d-inline-block side_feed ">
                    <a href="{{(route('newsfeed'))}}"> <img src="{{asset('storage/img/DSCF20072.jpg')}}"> </a>
                    <div class="news-title-side-up">
                        <p class="font-weight-semibold">{{$second->created_at->format('d-m-y')}}</p>
                        <a href="{{(route('newsfeed'))}}" class="text-decoration-none"><h3 class="font-weight-semibold">{{$second->title}}</h3></a>
                    </div>
                </div>
                <div class=" d-inline-block side_feed my-top-3">
                    <a href="{{(route('newsfeed'))}}"> <img src="{{asset('storage/img/images-4.jpeg')}}"> </a>
                    <div class="news-title-side-down">
                        <p class="font-weight-bold">{{$third->created_at->format('d-m-y')}}</p>
                        <a href="{{(route('newsfeed'))}}" class="text-decoration-none"><h3 class="font-weight-semibold">{{$third->title}}</h3></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-rules-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 bg-white my-5">
                    <div class="col-12 mt-5">
                        <div class="text-center">
                            <button class="scnd-btn m-3"><a href="/administer" class="text-white">Plattegrond</a>
                            </button>
                            <button class="scnd-btn m-3"><a href="{{ route('leaderboard') }}" class="text-white">Leaderboard</a>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-10 text-center my-5">
                        <table class="table table-hover mx-5">
                            <thead>
                            <tr>
                                <th scope="col">Positie</th>
                                <th scope="col">Spelernaam</th>
                                <th scope="col">Aantal Punten</th>
                                <th scope="col">Aantal Gespeelde Rondes</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--            Replace with $s->where('user_id', 1)->sum('amount')    --}}
                            <?php $pos = 1 ?>
                            @foreach($combinedScores as $score)
                                {{--                    @foreach($scores as $score)--}}
                                <tr>
                                    {{--                        <td>{{ $score->where('user_id', 1)->sum('amount') }}</td>--}}

                                    <th scope="row">{{ $pos++ }}</th>
                                    <th scope="row">{{ $score['first_name'] }} {{ $score['prefix'] }} {{ $score['last_name'] }}</th>
                                    <td>{{ $score['amount'] }}</td>
                                    <td>{{ $score['rounds'] }} {{ ($score['rounds'] > 1 ? 'Rondes' : 'Ronde') }}</td>
                                    @if($loop->iteration == 5)
                                        @break
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
