@extends('layouts.userpanel')

@section('content')
    <div class="container userdashboard">
        <div class="userdashboard-inner userdashboard-inner-height">
            <div class="row verify-title title-margin mt-5">
                <div class="col-12">
                    <h1>Ranglijst</h1>
                </div>
            </div>
            <div class="leaderboard-background">
                <div id="scoresContainer" class="p-5">
                    <div class="col-12 text-center">
                        <table class="table table-hover" id="table-scores">
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
