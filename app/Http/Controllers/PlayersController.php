<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class PlayersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $players = config('roles.models.role')::where('slug', 'user')->first()->users;

        return view('dashboard.players', compact('players'));
    }

    public function store(PlayersRequest $request)
    {

        $data = $request->validated();

        $player = config('roles.models.defaultUser')::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $role = config('roles.models.role')::where('slug', '=', 'user')->first();  //choose the default role upon user creation.
        $player->attachRole($role);

        return redirect()->route('players.index');
    }

    public function show(User $player)
    {
        //
    }

    public function edit(User $player)
    {
        //
    }

    public function update(PlayersRequest $request, User $player)
    {
        $player->first_name = $request->first_name;
        $player->last_name = $request->last_name;
        $player->email = $request->email;
        $player->password = $request->password;

        $player->save();

        return redirect()->route('players.index');
    }

    public function destroy(User $player)
    {
        $player->delete();
        return redirect()->route('players.index');
    }
}
