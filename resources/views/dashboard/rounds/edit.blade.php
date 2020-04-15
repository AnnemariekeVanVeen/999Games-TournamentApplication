@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner">
        <div class="height-inner">
            <div class="row d-flex align-items-center title-margin">
                <div class="col d-flex align-items-center">
                    <h1>U bent {{ $round->name }} aan het bewerken</h1>
                </div>
            </div>
            @include('includes._error')
            <div class="row players-inner w-50">
                <form method="POST" action="{{ route('rounds.update', ['round' => $round]) }}">
                    @csrf
                    @method('PUT')
                    <div class="w-100">
                        <input class="w-100 mr-3 mb-4" type="text" name="name" placeholder="Ronde naam" minlength="5" maxlength="45" value="{{ $round->name }}" required>
                    </div>
                    <div class="w-100">
                        <input class="mr-3 mb-4" type="checkbox" id="bracket_round" name="bracket_round" value="1" {{ ($round->bracket_round ? 'checked' : '') }}><label class="w-75" for="bracket_round">Bracket ronde</label>
                    </div>
                    <div class="w-100">
                        <input class="mr-3 mb-4" type="checkbox" id="in_progress" name="in_progress" value="1" {{ ($round->in_progress ? 'checked' : '') }}><label class="w-75" for="in_progress">Huidig bezig</label>
                    </div>
                    <div class="w-100">
                        <input class="mr-3 mb-4" type="checkbox" id="finished" name="finished" value="1" {{ ($round->finished ? 'checked' : '') }}><label class="w-75" for="finished">Afgelopen</label>
                    </div>

                    <div class="modal-footer">
                        <button class="btn scnd-btn">
                            <a href="{{ route('rounds.index') }}">Ga terug</a>
                        </button>
                        <button type="submit" name="Submit" value="Edit round" class="btn prim-btn">Sla veranderingen op</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
