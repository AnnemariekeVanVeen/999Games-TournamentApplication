<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Round;
use App\Score;
use App\User;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('level:1');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('usersDashboard.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return Response
     */
    public function store(UserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return void
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Response
     */
    public function edit(User $user)
    {
        $user = Auth::user();
        return view('usersDashboard.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param User $usersDashboard
     * @return Response
     */
    public function update(UserRequest $request, User $usersDashboard)
    {
        $user = Auth::user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        if (!empty($request->password)):
            $user->password = Hash::make($request->password);
        endif;

        if ($user->save()):
            session()->flash('msg', 'Profielinstellingen succesvol gewijzigd');
        else:
            session()->flash('alert', 'Fout tijdens het wijzigen van de profielinstellingen');
        endif;

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $user
     * @return void
     */
    public function destroy($user)
    {
        $user = User::find($user);
        $user->delete();
        return redirect()->route('root');
    }

    /**
     * Show the view to verify the achieved scores
     * @return Factory|View
     */
    public function verify()
    {
        $user = Auth::user();

        $scores = Score::where('user_id', $user->id)->get();

        return view('usersDashboard.verify', compact('scores'));
    }

    /**
     * Verify the score foreach round played by the player himself
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function verifyScore(Request $request)
    {
        $score = Score::find($request->score_id);

        $score->validated = $request->validation;
        $score->save();

        return redirect()->back();
    }

    /**
     * Show the view with the personal game schedule
     *
     * @return Factory|View
     */
    public function gameSchedule()
    {
        $user = User::find(Auth::id());

        return view('usersDashboard.schedule', compact('user'));
    }
}
