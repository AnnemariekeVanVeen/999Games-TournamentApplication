<?php

namespace App\Http\Controllers;

use App\GameTable;
use App\Http\Requests\ScoreInputRequest;
use App\Round;
use App\Score;
use App\User;
use Illuminate\Http\Request;

class ScoresInputController extends Controller
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
        $rounds = Round::all();
        $scores = Score::all();

        return view('dashboard.scoreInput', compact('scores', 'rounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * For inputting scores we'll be updating them as the scores already exist to arrange tables.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ScoreInputRequest $request, $id)
    {
        // Scores contains the scores that need to be updated.
        $scores = Score::where('game_table_id', $id)->get();

        // Loop to get all scores, looping early for this since it can either be 3 or 4 scores.
        foreach ($scores as $key => $score) {
            if ($key === 0) {
                $score0 = $request->score0;
            } elseif ($key === 1) {
                $score1 = $request->score1;
            } elseif ($key === 2) {
                $score2 = $request->score2;
            } else {
                $score3 = $request->score3;
            }
        }

        foreach ($scores as $key => $score) {
            if (!isset($score3)) {
                $totalScore = $score0 + $score1 + $score2;
            } else {
                $totalScore = $score0 + $score1 + $score2 + $score3;
            }

            if ($key === 0) {
                $score->amount = $score0;
                $score->weight = round(($score0 / $totalScore) * 100, 2, PHP_ROUND_HALF_DOWN);
            } elseif ($key === 1) {
                $score->amount = $score1;
                $score->weight = round(($score1 / $totalScore) * 100, 2, PHP_ROUND_HALF_DOWN);
            } elseif ($key === 2) {
                $score->amount = $score2;
                $score->weight = round(($score2 / $totalScore) * 100, 2, PHP_ROUND_HALF_DOWN);
            } else {
                $score->amount = $score3;
                $score->weight = round(($score3 / $totalScore) * 100, 2, PHP_ROUND_HALF_DOWN);
            }
            $score->save();
        }

        return redirect()->route('scoreinput.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
