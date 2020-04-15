@extends('layouts.app')

@section('content')
    <div class="bg-footer">
        <img  class="header-img" src="{{ asset('storage/img/Carcassonne_spel-1024x576.jpg') }}">
        <div class="newsfeed-title">
            <h1 class="text-center font-weight-bold">Nieuws berichten</h1>
        </div>
        <div class="container">
            @foreach($newsfeeds as $newsfeed)
            <div class="body-newsfeed">
                <div class="row title-newsfeed"></div>
                <h3 class="col-8 d-inline-block font-weight-bold">{{$newsfeed->title}}</h3>
                <p class="col-2 justify-content-end float-right d-inline-block font-weight-bold">{{$newsfeed->created_at->format('d-m-y')}}</p>
                <div class=" col content">
                    <p>{{$newsfeed->article}}</p>
                </div>
            </div>
            @endforeach
            @include('includes.c2a')
        </div>
    </div>
@endsection
