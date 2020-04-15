<?php

namespace App\Http\Controllers;

use App\GameTable;
use App\Round;
use App\Score;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use function Psy\debug;

class TableArrangementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('level:3');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rounds = Round::all();
        $tables = GameTable::all();

        return view('dashboard.tableArrangement', compact('rounds', 'tables'));
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
    public function store(TableArrangementRequest $request)
    {

        $data = $request->validated();

        return redirect()->route('tablearrangement.index');
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
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    /**
     * Arrange the starting round.
     * @param Round $round
     * @return Factory|View
     */
    public function arrangeStartingRound(Round $round)
    {
        // Get all the players with the correct role
        $players = config('roles.models.role')::where('slug', 'user')->cursor()->first()->users;

        // Count the players in the array
        $playersCount = count($players);

        // Calculate the modulo of the amount of players
        $modulo = $playersCount % 4;

        // Modulo 0
        if ($modulo == 0):
            // Calculate the number of tables
            $numOfTables = $playersCount / 4;
            // Set the number for the table name
            $tableNum = 1;

            // Loop while there are still tables to arrange
            while ($numOfTables != 0) {
                // Create a new game table
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                // Set a counter for the number of players on the table
                $i = 0;

                // For modulo 0 all tables will have 4 players
                while ($i != 4) {
                    // Create a new Score, which is also the pivot table
                    foreach ($players as $key => $player) {
                        $scoreRow = new Score;
                        $scoreRow->game_table_id = $gameTable->id;
                        $scoreRow->round_id = $round->id;
                        $scoreRow->user_id = $player->id;
                        $scoreRow->save();

                        $i++;

                        // Remove the just assigned player from the array of players
                        unset($players[$key]);

                        // If a table has been assigned to 4 players, stop the loop
                        if ($i == 4)
                            break;
                    }
                }
                $tableNum++;
                $numOfTables--;

                // If there are no tables left to assign, stop the loop
                if ($numOfTables == 0) {
                    break;
                }
            }

        // Modulo 1
        elseif ($modulo == 1):
            // Calculate the number of tables
            $numOfTables = (($playersCount - 9) / 4) + 3;
            // Set the number for the table name
            $tableNum = 1;

            // Loop while there are still tables to arrange
            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                // Check if there are 3 tables left, so these will be assigned with 3 players per table
                if ($numOfTables < 4 && $numOfTables > 0):
                    // Set a counter for the number of players on the table
                    $j = 0;

                    // For modulo 1 3 tables will have 3 players
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            // Create a new Score, which is also the pivot table
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $j++;

                            // Remove the just assigned player from the array of players
                            unset($players[$key]);

                            // If a table has been assigned to 3 players, stop the loop
                            if ($j == 3)
                                break;

                        }
                    }
                    $tableNum++;
                // If there are no tables left to assign, stop the loop
                elseif ($numOfTables == 0):
                    break;
                else:
                    // Set a counter for the number of players on the table
                    $i = 0;

                    // The other tables will have 4 players
                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            // Create a new Score, which is also the pivot table
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $i++;

                            // Remove the just assigned player from the array of players
                            unset($players[$key]);

                            // If a table has been assigned to 4 players, stop the loop
                            if ($i == 4)
                                break;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }

        // Modulo 2
        elseif ($modulo == 2):
            // Calculate the number of tables
            $numOfTables = (($playersCount - 6) / 4) + 2;
            // Set the number for the table name
            $tableNum = 1;

            // Loop while there are still tables to arrange
            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                // Check if there are 2 tables left, so these will be assigned with 3 players per table
                if ($numOfTables < 3 && $numOfTables > 0):
                    // Set a counter for the number of players on the table
                    $j = 0;

                    // For modulo 2 2 tables will have 3 players
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            // Create a new Score, which is also the pivot table
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $j++;

                            // Remove the just assigned player from the array of players
                            unset($players[$key]);

                            // If a table has been assigned to 3 players, stop the loop
                            if ($j == 3)
                                break;
                        }
                    }
                    $tableNum++;
                // If there are no tables left to assign, stop the loop
                elseif ($numOfTables == 0):
                    break;
                else:
                    // Set a counter for the number of players on the table
                    $i = 0;

                    // The other tables will have 4 players
                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            // Create a new Score, which is also the pivot table
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $i++;

                            // Remove the just assigned player from the array of players
                            unset($players[$key]);

                            // If a table has been assigned to 4 players, stop the loop
                            if ($i == 4)
                                break;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }

        // Modulo 3
        elseif ($modulo == 3):
            // Calculate the number of tables
            $numOfTables = (($playersCount - 3) / 4) + 1;
            // Set the number for the table name
            $tableNum = 1;

            // Loop while there are still tables to arrange
            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                // Check if there is 1 table left, so these will be assigned with 3 players on the table
                if ($numOfTables < 2 && $numOfTables > 0):
                    // Set a counter for the number of players on the table
                    $j = 0;

                    // For modulo 1 3 tables will have 3 players
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            // Create a new Score, which is also the pivot table
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $j++;

                            // Remove the just assigned player from the array of players
                            unset($players[$key]);

                            // If a table has been assigned to 3 players, stop the loop
                            if ($j == 3)
                                break;
                        }
                    }
                    $tableNum++;
                // If there are no tables left to assign, stop the loop
                elseif ($numOfTables == 0):
                    break;
                else:
                    // Set a counter for the number of players on the table
                    $i = 0;

                    // The other tables will have 4 players
                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            // Create a new Score, which is also the pivot table
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $i++;

                            // Remove the just assigned player from the array of players
                            unset($players[$key]);

                            // If a table has been assigned to 4 players, stop the loop
                            if ($i == 4)
                                break;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }
        endif;

        return redirect()->back();
    }

    /**
     * Arrange the second and third rounds.
     * @param Round $round
     * @return RedirectResponse
     */
    public function arrangeRound(Round $round)
    {
        /**
         * Check if the round_id is not 1 so, the model can get
         * the rows of the previous round and sort them by weight.
         * Else use round_id 1
         */
        if ($round->id != 1)
            $players = Score::where('round_id', ($round->id - 1))->orderBy('weight', 'desc')->get();
        else
            $players = Score::where('round_id', 1)->orderBy('weight', 'desc')->get();

        // Count the players in the array
        $playersCount = count($players);

        // Calculate the modulo of the amount of players
        $modulo = $playersCount % 4;

        // Modulo 0
        if ($modulo == 0):
            // Calculate the number of tables
            $numOfTables = $playersCount / 4;
            // Set the number for the table name
            $tableNum = 1;

            // Loop while there are still tables to arrange
            while ($numOfTables != 0) {
                // Create a new game table
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                // Set a counter for the number of players on the table
                $i = 0;

                // For modulo 0 all tables will have 4 players
                while ($i != 4) {
                    foreach ($players as $key => $player) {
                        $user = User::find($player->user_id);
                        if ($user->hasRole('user')):
                            // Create a new Score, which is also the pivot table
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->user_id;
                            $scoreRow->save();

                            $i++;

                            // Remove the just assigned player from the array of players
                            unset($players[$key]);

                            // If a table has been assigned to 4 players, stop the loop
                            if ($i == 4)
                                break;
                        endif;
                    }
                }
                $tableNum++;
                $numOfTables--;

                // If there are no tables left to assign, stop the loop
                if ($numOfTables == 0) {
                    break;
                }
            }

        // Modulo 1
        elseif ($modulo == 1):
            // Calculate the number of tables
            $numOfTables = (($playersCount - 9) / 4) + 3;
            // Set the number for the table name
            $tableNum = 1;

            // Loop while there are still tables to arrange
            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                // Check if there are 3 tables left, so these will be assigned with 3 players per table
                if ($numOfTables < 4 && $numOfTables > 0):
                    // Set a counter for the number of players on the table
                    $j = 0;

                    // For modulo 1 3 tables will have 3 players
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                // Create a new Score, which is also the pivot table
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $j++;

                                // Remove the just assigned player from the array of players
                                unset($players[$key]);

                                // If a table has been assigned to 3 players, stop the loop
                                if ($j == 3)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                // If there are no tables left to assign, stop the loop
                elseif ($numOfTables == 0):
                    break;
                else:
                    // Set a counter for the number of players on the table
                    $i = 0;

                    // The other tables will have 4 players
                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                // Create a new Score, which is also the pivot table
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $i++;

                                // Remove the just assigned player from the array of players
                                unset($players[$key]);

                                // If a table has been assigned to 4 players, stop the loop
                                if ($i == 4)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }

        // Modulo 2
        elseif ($modulo == 2):
            // Calculate the number of tables
            $numOfTables = (($playersCount - 6) / 4) + 2;
            // Set the number for the table name
            $tableNum = 1;

            // Loop while there are still tables to arrange
            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                // Check if there are 2 tables left, so these will be assigned with 3 players per table
                if ($numOfTables < 3 && $numOfTables > 0):
                    // Set a counter for the number of players on the table
                    $j = 0;

                    // For modulo 2 2 tables will have 3 players
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                // Create a new Score, which is also the pivot table
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $j++;

                                // Remove the just assigned player from the array of players
                                unset($players[$key]);

                                // If a table has been assigned to 3 players, stop the loop
                                if ($j == 3)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                // If there are no tables left to assign, stop the loop
                elseif ($numOfTables == 0):
                    break;
                else:
                    // Set a counter for the number of players on the table
                    $i = 0;

                    // The other tables will have 4 players
                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                // Create a new Score, which is also the pivot table
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $i++;

                                // Remove the just assigned player from the array of players
                                unset($players[$key]);

                                // If a table has been assigned to 4 players, stop the loop
                                if ($i == 4)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }

        // Modulo 3
        elseif ($modulo == 3):
            // Calculate the number of tables
            $numOfTables = (($playersCount - 3) / 4) + 1;
            // Set the number for the table name
            $tableNum = 1;

            // Loop while there are still tables to arrange
            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                // Check if there is 1 table left, so these will be assigned with 3 players on the table
                if ($numOfTables < 2 && $numOfTables > 0):
                    // Set a counter for the number of players on the table
                    $j = 0;

                    // For modulo 1 3 tables will have 3 players
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                // Create a new Score, which is also the pivot table
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $j++;

                                // Remove the just assigned player from the array of players
                                unset($players[$key]);

                                // If a table has been assigned to 3 players, stop the loop
                                if ($j == 3)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                // If there are no tables left to assign, stop the loop
                elseif ($numOfTables == 0):
                    break;
                else:
                    // Set a counter for the number of players on the table
                    $i = 0;

                    // The other tables will have 4 players
                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                // Create a new Score, which is also the pivot table
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $i++;

                                // Remove the just assigned player from the array of players
                                unset($players[$key]);

                                // If a table has been assigned to 4 players, stop the loop
                                if ($i == 4)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }
        endif;

        return redirect()->back();
    }

    /**
     * Arrange the bracket rounds (eliminations).
     */
    public function arrangeBracketRound()
    {

    }

    /**
     * Delete all the tables from a certain round in the database.
     *
     * @param Round $round
     * @return RedirectResponse
     */
    public function deleteAllTables(Round $round)
    {
        $tables = Score::where('round_id', $round->id)->get();
        foreach ($tables as $table):
            $table->delete();
        endforeach;
        return redirect()->back();
    }
}

