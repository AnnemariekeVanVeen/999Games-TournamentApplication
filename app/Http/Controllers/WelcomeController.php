<?php

namespace App\Http\Controllers;

use App\Newsfeed;
use App\Score;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $newsfeeds = Newsfeed::all()->take(3);
        //splits $newsfeed in 3 different variables
        list($first, $second, $third) = $newsfeeds;

        $scores = Score::paginate(5);
        $combinedScores = $this->getCombinedScores($scores);

        return view('pages.welcome', compact('first', 'second', 'third', 'combinedScores'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCombinedScores($scores)
    {
        $combinedIds = [];
        $combinedResults = [];

        // Check's if user_id isn't already in array, if so. Combine scores and rounds together to show total score.
        foreach ($scores as $key => $score) {
            // Only validated scores should be shown to the user.
            if ($score->validated == true && $score->amount != null) {
                if (!in_array($score->user_id, $combinedIds)) {
                    $combinedResults[$key]['id'] = $score->user_id;
                    $combinedResults[$key]['first_name'] = $score->user->first_name;
                    $combinedResults[$key]['prefix'] = (!is_null($score->user->prefix) ? $score->user->prefix : '');
                    $combinedResults[$key]['last_name'] = $score->user->last_name;
                    $combinedResults[$key]['amount'] = $score->amount;
                    $combinedResults[$key]['rounds'] = 1;

                    array_push($combinedIds, $score->user_id);
                } else {
                    $id = array_keys($combinedIds, $score->user_id);
                    $combinedResults[$id[0]]['amount'] += $score->amount;
                    $combinedResults[$id[0]]['rounds']++;
                }
            }
        }

        /**
         * Copy all results into a new array so we can sort with it on the existing array to display the highest score first.
         */
        if ($combinedResults != null) {
            foreach ($combinedResults as $key => $row) {
                $results[$key] = $row['amount'];
            }
            array_multisort($results, SORT_DESC, $combinedResults);
        }
        return $combinedResults;
    }
}
