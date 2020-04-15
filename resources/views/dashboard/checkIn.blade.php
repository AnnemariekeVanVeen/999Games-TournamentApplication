@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner priviliges-dashboard">
        <div class="height-inner">
            <div class="row d-flex align-items-center title-margin">
                <div class="col d-flex align-items-center">
                    <h1>Check-in</h1>
                </div>
            </div>
            <div class="row privileges-inner">
                @include('includes._error')
                <table id="table-pagination" class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Email</th>
                        <th scope="col">Checkin</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($checkIns as $checkIn)
                        @if ($checkIn->level() === 1)
                            <tr>
                                <td scope="row">{{ $checkIn->id }}</td>
                                <td>{{ $checkIn->first_name }}</td>
                                <td>{{ $checkIn->last_name }}</td>
                                <td>{{ $checkIn->email }}</td>
                                <td>
                                    <form method="post" action="{{ route('checkin.update', $checkIn) }}">
                                        @method('PATCH')
                                        @csrf
                                        <select name="role">
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}" {{ ($checkIn->roles->contains($role)) ? 'selected' : null }}>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" name="Submit" value="Change Checkin" class="btn prim-btn">Wijzigen</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
