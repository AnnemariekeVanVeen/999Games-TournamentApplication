@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner">
        <h1 class="title-margin">Beheerder Dashboard</h1>
        <div class="timer-dashboard">
            <h2>Timer speelrondes</h2>
            <div class="timer-inner row d-flex">
                <div class="col d-flex align-items-center" id="inputArea">
                    <form class="d-flex" method="post" action="">
                    <input  placeholder="Voer ronde tijd in" id="minutes" type="text" min="0" max="1000">
                        <input id="sectime" value="{{ $timer->seconds }}" type="hidden" min="0" max="1000">
                    <p class="margin"><strong>Minuten</strong></p>
                    <button type="button" class="prim-btn" id="js-startcounter" onclick="startButton()">Start ronde</button>
                    </form>
                </div>
                    <h2 id="time" class="timer-currenttime">00:00</h2>
            </div>
        </div>
        <div class="accountoverview-dashboard">
            <h2>Overzicht accounts</h2>
            <div class="row">
                <a class="col d-inline-block block-overview" href="{{ url('players') }}"><div>
                    <div class="block-content">
                        <p class="overview-number">{{ count($players) }}</p>
                        <p class="overview-name">Deelnemers</p>
                    </div>
                </div></a>
                <a class="col d-inline-block block-overview" href="{{ url('judges') }}"><div>
                    <div class="block-content">
                        <p class="overview-number">{{ count($judges) }}</p>
                        <p class="overview-name">Juryleden</p>
                    </div>
                </div></a>
                <a class="col d-inline-block block-overview" href="#"><div>
                    <div class="block-content">
                        <p class="overview-number">{{ count($admins) }}</p>
                        <p class="overview-name">Beheerders</p>
                    </div>
                </div></a>
            </div>
        </div>
        <div class="quickadd-dashboard">
            <div class="d-flex row align-items-center">
                <h2 class="quickadd-title col">Een deelnemer toevoegen</h2>
                <div class="col d-flex justify-content-end">
                    <a class="a-btn" href="{{ url('players') }}">
                        <button class="quickadd-button scnd-btn">Deelnemer toevoegen</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="leaderboard-dashboard">
            <div class="row leaderboard-inner">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Positie</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Aantal punten</th>
                        <th scope="col">Aantal rondes</th>
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
                            </tr>
                            @if($loop->iteration == 5)
                                @break
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <a class="viewleaderboard-dashboard" href="{{ route('leaderboard') }}">Bekijk de gehele ranglijst ></a>
            </div>
        </div>
    </div>
    <script>
        function startButton() {
            let min = $("#minutes").val() * 60;

            // console.log(min);


            checkTimer("{{ Auth::user()->api_token }}", min);
            myTime();
        }

        function myTime() {
            let mySec = $({{$timer->seconds}});

            console.log(mySec);

            tick(mySec);
        }
    </script>
@endsection
