@extends('layouts.userpanel')

@include('includes._error')

@section('content')
    <div class="container userdashboard">
        <div class="userdashboard-inner userdashboard-inner-height">
            <div class="row verify-title title-margin mt-5">
                <div class="col-12">
                    <h1>Valideren</h1>
                </div>
            </div>
            <div class="row block-verify text-center">
                <table class="table m-5 table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Ronde</th>
                            <th scope="col">Score</th>
                            <th scope="col">Validatie</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($scores as $score)
                        <tr>
                            <td>{{ $score->round->name }}</td>
                            <td>{{ $score->amount }}</td>
                            <td>
                                <form action="{{ route('verify_score') }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="{{ $score->id }}" name="score_id">
                                    <input type="hidden" value="1" name="validation">
                                    @if($score->validated)
                                        <input title="Score is gevalideerd" class="disable-btn" type="submit" value="Valideer" disabled>
                                    @else
                                        <button class="prim-btn">
                                            <input type="submit" value="Valideer">
                                        </button>
                                    @endif
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

