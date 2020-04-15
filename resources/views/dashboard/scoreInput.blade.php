@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner">
        <div class="height-inner scores-invoeren">
            <h1 class="title-margin">Scores invoeren</h1>
                <div id="accordion" role="tablist">
                    @foreach($rounds as $keyR => $round)
                    <div class="card voorronde">
                        <div class="card-header" role="tab" id="heading{{ $keyR }}">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse{{ $keyR }}" aria-expanded="true" aria-controls="collapse{{ $keyR }}">
                                    {{ $round->name }}
                                </a>
                            </h5>
                        </div>
                        <div id="collapse{{ $keyR }}" class="collapse" role="tabpanel" aria-labelledby="heading{{ $keyR }}">
                            <div class="card-body d-flex flex-wrap">
                                @php($idArray = [])
                                @foreach($round->game_tables as $keyT => $table)
                                    @if($table->users->first()->pivot->round_id == $round->id)
                                        @if(!$table->id == in_array($table->id, $idArray))
                                            <div class="scores-bg col-6 p-3">
                                                <div class="col">
                                                    <h3>{{ $table->name }}</h3>
                                                </div>
                                                <form action="{{ route('scoreinput.update', ['scoreinput' => $table->id]) }}" method="post">
                                                    @csrf
                                                    @method('PUT')

                                                    @foreach($table->users as $keyU => $user)
                                                        <div class="col d-flex align-items-center">
                                                            <p class="col-4">{{ $user->first_name }} {{ $user->last_name }}</p>
                                                            <div class="score-input d-flex align-items-center justify-content-end col-5">
                                                                <label for="round{{ $keyR }}Table{{ $keyT }}User{{ $keyU }}">Aantal punten: </label>
                                                                <input type="number" min="0" max="1000" name="score{{ $keyU }}" value="{{ (!empty($user->scores[$round->id - 1]->amount) ? $user->scores[$round->id - 1]->amount : '') }}" id="round{{ $keyR }}Table{{ $keyT }}User{{ $keyU }}">
                                                            </div>
                                                            <div class="col-3">
                                                                <p>{{ (!empty($user->scores[$round->id - 1]->weight) ? 'Gewicht: ' . round($user->scores[$round->id - 1]->weight, 2) : '') }}</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                <button class="prim-btn" type="submit">Scores opslaan</button>
                                                </form>
                                            </div>
                                            @php(array_push($idArray, $table->id))
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>



@endsection
