@extends('layouts.userpanel')

@include('includes._error')

@section('content')
    <div class="container userdashboard">
        <div class="userdashboard-inner userdashboard-inner-height">
            <div class="row verify-title title-margin mt-5">
                <div class="col-12">
                    <h1>Jouw spelschema</h1>
                </div>
            </div>
            <div>
                @foreach($user->game_tables as $game_table)
                    <div id="accordion" role="tablist">
                        <div class="card voorronde">
                            <div class="card-header" role="tab" id="heading{{ $game_table->id }}">
                                <h5 class="mb-0 d-inline">
                                    <a data-toggle="collapse" href="#collapse{{ $game_table->id }}"
                                       aria-expanded="false"
                                       aria-controls="collapse{{ $game_table->id }}"
                                       class="collapsed text-decoration-none">
                                        <div class="col-11 d-inline-block">
                                            {{ $game_table->rounds->first()->name }}
                                        </div>
                                        <div class="col-1 mb-0 d-inline justify-content-end arrow_down">
                                            <img class="arrow_select" src="{{ asset('storage/icons/arrow_down.svg') }}">
                                        </div>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse{{ $game_table->id }}" class="collapse" role="tabpanel"
                                 aria-labelledby="heading{{ $game_table->id }}">
                                <div class="card-body">
                                    <div class="row leaderboard-inner">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th scope="col">Ronde</th>
                                                <th scope="col">Tafel</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>{{ $game_table->rounds->first()->name }}</th>
                                                <td>{{ $game_table->name }}</td>
                                                @if($game_table->rounds->first()->in_progress)
                                                    <td>Bezig</td>
                                                @elseif($game_table->rounds->first()->finished)
                                                    <td>Afgerond</td>
                                                @else
                                                    <td>Afwachtend</td>
                                                @endif
                                               </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>

@endsection
