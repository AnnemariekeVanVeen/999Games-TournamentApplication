<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckInRequest;
use App\Http\Requests\JudgesRequest;
use App\Http\Requests\PlayersRequest;
use App\Http\Requests\PrivilegesRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use jeremykenedy\LaravelRoles\Models\Role;

class CheckInController extends Controller
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
        $checkIns = User::all();

//        $roles = Role::find('name', '');
        $roles = config('roles.models.role')::where('slug', 'user')->orWhere('slug', 'unverified')->get();
//        $roles = Role::all();

        return view('dashboard.checkIn', compact('checkIns', 'roles'));
    }

    public function store(CheckInRequest $request)
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

    public function update(CheckInRequest $request, $id)
    {
        $checkIn = User::where('id', $id)->first();
//        dd($checkIn);
        $checkIn->syncRoles([$request->role]);
        return redirect()->route('checkin.index');
    }
}
