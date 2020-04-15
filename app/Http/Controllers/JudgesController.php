<?php

namespace App\Http\Controllers;

use App\Http\Requests\JudgesRequest;
use App\Http\Requests\PlayersRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JudgesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('level:3');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $judges = config('roles.models.role')::where('slug', 'jury')->first()->users;

        return view('dashboard.judges', compact('judges'));
    }

    public function store(JudgesRequest $request)
    {
        $data = $request->validated();

        $judge = config('roles.models.defaultUser')::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $role = config('roles.models.role')::where('slug', '=', 'jury')->first();  //choose the default role upon user creation.
        $judge->attachRole($role);

        return redirect()->route('judges.index');
    }

    public function show(User $judge)
    {
        //
    }

    public function edit(User $judge)
    {
        //
    }

    public function update(JudgesRequest $request, User $judge)
    {
        $judge->first_name = $request->first_name;
        $judge->last_name = $request->last_name;
        $judge->email = $request->email;
        $judge->password = $request->password;

        $judge->save();

        return redirect()->route('judges.index');
    }

    public function destroy(User $judge)
    {
        $judge->delete();
        return redirect()->route('judges.index');
    }

}
