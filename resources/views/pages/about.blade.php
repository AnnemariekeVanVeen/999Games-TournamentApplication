@extends('layouts.app')

@section('content')
    <div class="header-about">
        <div class="bg-header-about">
            <div class="container d-flex align-items-center">
                <div class="row d-flex align-items-center">
                    <div class="col-3">
                        <img src="{{ asset('storage/img/main-meeples.png') }}">
                    </div>
                    <div class="col-6">
                        <h1>Neem deel aan het avontuur!</h1>
                        <h5>
                            Interesse in deelnemen aan het NK Carcassonne, met de meest ervaren spelers van Nederland?
                        </h5>
                        <button class="prim-btn">
                            <a href="/administer">Schrijf je in!</a>
                        </button>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('storage/img/main-meeples2.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="about-header-borderbottom"></div>
    </div>
    <div class="about-content">
        <div class="about-bottomimg">
            <div class="container">
                <div class="row about-carcassonne d-flex align-items-center">
                    <div class="col-6">
                        <h2>Over Carcassonne</h2>
                        <p>Klaus-Jürgen Wrede, de auteur van Carcassonne, bracht eind vorige eeuw een bezoek aan de gelijknamige Franse stad. Hij was daar om inspiratie op te doen voor het schrijven van een roman. En geïnspireerd raakte hij zeker, maar niet voor zijn boek. Klaus-Jürgen had meerdere ijzers in het vuur, want hij hield zich als hobbyist bezig met het ontwerpen van bordspellen. De historische stad en omgeving brachten hem het perfecte thema voor zijn te ontwerpen spel; slechts een half jaar later was Carcassonne klaar en getest. Zijn spelconcept werd meteen opgepikt en in de herfst van 2000 werd het gepresenteerd op de spellenbeurs Spiel in Duitsland.</p>
                        <button class="ter-btn"><a>Koop Carcassonne</a></button>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('storage/img/basisspel-main-img.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vines-devider"></div>
    <div class="nk-regels">
        <div class="container">
            <div class="row about-nk">
                <div class="col-6 d-flex align-items-center">
                    <img src="{{ asset('storage/img/meeples-kaarten.png') }}">
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h2>Over het NK</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                            sed diam nonumy eirmod tempor invidunt ut labore et
                            dolore magna aliquyam erat, sed diam voluptua. At vero
                            eos et accusam et justo duo dolores et ea rebum. Stet
                            clita kasd gubergren, no sea takimata sanctus est Lorem
                            ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam
                            erat, sed diam voluptua. At vero eos et accusam et justo
                            duo dolores et ea rebum.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between about-rules">
                <div class="col-lg bg-rules-1 my-4 rules-block">
                    <a href="#" class="text-decoration-none"><h4 class="text-center font-weight-bold">Bekijk de toernooiregels</h4></a>
                </div>
                <div class="col-lg bg-rules-2 my-4 rules-block">
                    <a href="#" class="text-decoration-none"><h4 class="text-center font-weight-bold">Bekijk de spelregels</h4></a>
                </div>
            </div>
        </div>
    </div>
    @include('includes.c2a')
    <div class="container">
        <div class="row d-flex justify-content-between news-feed align-content-lg-center">
            <div class="col-8 d-inline-block main_feed">
                <a href="{{(route('newsfeed'))}}"> <img src="{{asset('storage/img/Carcassonne_spel-1024x576.jpg')}}"> </a>
                <div class="news-title-main">
                    <p class="font-weight-bold">{{$first->created_at->format('d-m-y')}}</p>
                    <a class="text-decoration-none" href="{{(route('newsfeed'))}}"><h3 class="font-weight-bold">{{$first->title}} </h3></a>
                </div>
            </div>
            <div class="col-4 d-inline-block">
                <div class=" d-inline-block side_feed ">
                    <a href="{{(route('newsfeed'))}}"> <img src="{{asset('storage/img/DSCF20072.jpg')}}"> </a>
                    <div class="news-title-side-up">
                        <p class="font-weight-bold">{{$second->created_at->format('d-m-y')}}</p>
                        <a href="{{(route('newsfeed'))}}" class="text-decoration-none"><h3 class="font-weight-bold">{{$second->title}}</h3></a>
                    </div>
                </div>
                <div class=" d-inline-block side_feed my-top-3">
                    <a href="{{(route('newsfeed'))}}"> <img src="{{asset('storage/img/images-4.jpeg')}}"> </a>
                    <div class="news-title-side-down">
                        <p class="font-weight-bold">{{$third->created_at->format('d-m-y')}}</p>
                        <a href="{{(route('newsfeed'))}}" class="text-decoration-none"><h3 class="font-weight-bold">{{$third->title}}</h3></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
