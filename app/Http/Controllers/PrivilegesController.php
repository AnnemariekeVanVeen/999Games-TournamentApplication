<?php

namespace App\Http\Controllers;

use App\Http\Requests\JudgesRequest;
use App\Http\Requests\PlayersRequest;
use App\Http\Requests\PrivilegesRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use jeremykenedy\LaravelRoles\Models\Role;

class PrivilegesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $privileges = User::all();
        $roles = Role::all();

        return view('dashboard.privileges', compact('privileges', 'roles'));
    }

    public function store(PlayersRequest $request)
    {
        $data = $request->validated();

        $player = new User();
        $player->first_name = $data['first_name'];
        $player->last_name = $data['last_name'];
        $player->email = $data['email'];
        $player->password = Hash::make($data['password']);

        $player->save();

        return redirect()->route('players.index');
    }

    public function update(PrivilegesRequest $request, User $privilege)
    {
        $privilege->syncRoles([$request->role]);
        return redirect()->route('privileges.index');
    }
}
