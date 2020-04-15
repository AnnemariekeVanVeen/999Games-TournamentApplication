@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner players-dashboard">
        <div class="height-inner">
            <div class="row d-flex align-items-center title-margin">
                <div class="col d-flex align-items-center">
                    <h1>Nieuwsberichten</h1>

                    <div class="col d-flex justify-content-end">
                        <button type="button" class="btn scnd-btn" data-toggle="modal" data-target="#AddPlayersModal">
                            Nieuwsbericht toevoegen
                        </button>
                    </div>
                    {{--Edit modal--}}
                    @include('includes._error')
                    <div class="modal" id="AddPlayersModal" tabindex="-1" role="dialog"
                         aria-labelledby="AddPlayersModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="AddNewsArticle">Nieuwsbericht toevoegen</h5>
                                    <button type="button" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ route('nieuwsfeed.store') }}">

                                        @csrf
                                        <input class="form-control" type="text" name="title" placeholder="Titel"
                                               required>
                                        <br>
                                        <textarea class="form-control" type="text" name="article" placeholder="Content"
                                                  required rows="15"></textarea>
                                        <br>
                                        <button class="" type="submit" name="image" value="Upload image">Upload hier je
                                            afbeelding
                                        </button>

                                        <div class="modal-footer">
                                            <button type="button" class="btn scnd-btn" data-dismiss="modal">Exit
                                            </button>
                                            <button type="submit" name="Submit" value="Add new article"
                                                    class="btn prim-btn">Opslaan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--end edit modal--}}
            </div>
            <div class="row players-inner">
                <table id="table-pagination datatable" class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Datum</th>
                        <th scope="col">Title</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Verwijderen</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($newsfeeds as $newsfeed)
                        <tr>
                            <td scope="row">{{ $newsfeed->id }}</td>
                            <td style="width: 10%">{{ $newsfeed->created_at->format('d-m-y')}}</td>
                            <td>{{ $newsfeed->title}}</td>
                            <td><img style="width: 20%" data-toggle="modal" data-target="#EditNewsModal" data-id="{{ $newsfeed->id}}" src="{{ asset('storage/icons/ic_edit.png')}}"></td>
                            <div class="modal" id="EditNewsModal" tabindex="-1" role="dialog">
                                <div aria-labelledby="EditNewsModalsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="AddNewsArticle">Nieuwsbericht wijzigen</h5>
                                                <button type="button" class="close" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="/nieuwsfeed" id="editform">
                                                    @csrf
                                                    @method('PUT')
                                                    <input class="form-control" type="text" name="title" id="title"
                                                           value="{{ $newsfeed->title}}"
                                                           required>
                                                    <br>
                                                    <textarea class="form-control" type="text" name="article" id="article"
                                                              required rows="15">{{ $newsfeed->article}}</textarea>
                                                    <br>
                                                    <button class="" type="submit" name="image" value="Upload image" id="image">
                                                        Upload hier je afbeelding
                                                    </button>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn scnd-btn" data-dismiss="modal">
                                                            Exit
                                                        </button>
                                                        <button type="submit" name="Submit" value="Add new article"
                                                                class="btn prim-btn">Wijzig
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <td>
                                <form action="{{ route('nieuwsfeed.destroy', ['nieuwsfeed' => $newsfeed]) }}"
                                      method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="scnd-btn"><input class="float-right" type="submit" value="Delete"
                                                                    onclick="return confirm ('Are you sure you want to delete artikel, {{ $newsfeed->id }}?')">
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="/resources/js/edit.js"></script>
@endsection
