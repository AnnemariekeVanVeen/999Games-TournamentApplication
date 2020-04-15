@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner">
        <div class="height-inner">
            <div class="row d-flex align-items-center title-margin">
                <div class="col d-flex align-items-center">
                    <h1>Rondes bewerken</h1>
                </div>
                <!-- Button modal -->
                <div class="col d-flex justify-content-end">
                    <button type="button" class="btn scnd-btn" data-toggle="modal" data-target="#AddRoundsModal">
                        Rondes toevoegen
                    </button>

                    <!-- Modal -->
                    @include('includes._error')
                    <div class="modal" id="AddRoundsModal" tabindex="-1" role="dialog" aria-labelledby="AddRoundsModelLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="AddRoundsModalLabel">Ronde toevoegen</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('rounds.store') }}">
                                        @csrf

                                        <input type="text" name="name" placeholder="Ronde naam" minlength="5" maxlength="45" required>
                                        <input id="bracketCheckbox" type="checkbox" name="bracket_round" value="1"><label for="bracketCheckbox">Bracket ronde</label>

                                        <div class="modal-footer">
                                            <button type="button" class="btn scnd-btn" data-dismiss="modal">Close</button>
                                            <button type="submit" name="Submit" value="Voeg ronde toe" class="btn prim-btn">Sla ronde op</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rounds-inner">
                <table id="table-rounds" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Naam</th>
                            <th scope="col">Bracket ronde</th>
                            <th scope="col">Huidig bezig</th>
                            <th scope="col">Afgelopen</th>
                            <th scope="col">Bewerken</th>
                            <th scope="col">Verwijderen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rounds as $round)
                            <tr>
                                <td scope="row">{{ $round->id }}</td>
                                <td>{{ $round->name }}</td>
                                <td>{{ ($round->bracket_round ? 'Ja' : 'Nee') }}</td>
                                <td>{{ ($round->in_progress ? 'Ja' : 'Nee') }}</td>
                                <td>{{ ($round->finished ? 'Ja' : 'Nee') }}</td>
                                <td>
                                    <button class="scnd-btn">
                                        <a href="{{ route('rounds.edit', ['round' => $round]) }}">Bewerk</a>
                                    </button>
                                </td>
                                <td>
                                    <form action="{{ route('rounds.destroy', ['round' => $round]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="scnd-btn"><input class="float-right" type="submit" value="Delete"
                                                onclick="return confirm('Ben je zeker dat je {{ $round->name }} wilt verwijderen?')"></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
