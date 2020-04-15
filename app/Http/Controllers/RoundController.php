<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoundsRequest;
use App\Round;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class RoundController extends Controller
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
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $rounds = Round::all();

        return view('dashboard.rounds.roundsPanel', compact('rounds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RoundsRequest $request
     * @return RedirectResponse
     */
    public function store(RoundsRequest $request)
    {
        $data = $request->validated();

        $rnd = new Round();
        $rnd->name = $data['name'];

        if (!empty($data['bracket_round'])) {
            $rnd->bracket_round = $data['bracket_round'];
        } else {
            $rnd->bracket_round = 0;
        }

        $rnd->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Round $round
     * @return View
     */
    public function edit(Round $round)
    {
        return view('dashboard.rounds.edit', compact('round'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RoundsRequest $request
     * @param Round $round
     * @return RedirectResponse
     */
    public function update(RoundsRequest $request, Round $round)
    {
        $data = $request->validated();

        $round->name = $data['name'];
        if (!empty($data['bracket_round'])) {
            $round->bracket_round = $data['bracket_round'];
        } else {
            $round->bracket_round = 0;
        }

        if (!empty($data['in_progress'])) {
            $round->in_progress = $data['in_progress'];
        } else {
            $round->in_progress = 0;
        }

        if (!empty($data['finished'])) {
            $round->finished = $data['finished'];
        } else {
            $round->finished = 0;
        }

        $round->save();

        return redirect()->route('rounds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Round $round
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Round $round)
    {
        $round->delete();
        return redirect()->route('rounds.index');
    }
}
