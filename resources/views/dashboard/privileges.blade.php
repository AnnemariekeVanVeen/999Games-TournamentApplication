@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner priviliges-dashboard">
        <div class="height-inner">
            <div class="row d-flex align-items-center title-margin">
                <div class="col d-flex align-items-center">
                    <h1>Privileges</h1>
                </div>
            </div>
            <div class="row privileges-inner">
                @include('includes._error')
                <table id="table-users" class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Email</th>
                        <th scope="col">Privileges</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($privileges as $privilege)

                            <tr>
                                <td scope="row">{{ $privilege->id }}</td>
                                <td>{{ $privilege->first_name }}</td>
                                <td>{{ $privilege->last_name }}</td>
                                <td>{{ $privilege->email }}</td>
                                <td>
                                    <form method="post" action="{{ route('privileges.update', $privilege) }}">
                                        @method('PATCH')
                                        @csrf
                                        <select name="role">
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}" {{ ($privilege->roles->contains($role)) ? 'selected' : null }}>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" name="Submit" value="Change Privileges" class="btn prim-btn">Wijzigen</button>
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
