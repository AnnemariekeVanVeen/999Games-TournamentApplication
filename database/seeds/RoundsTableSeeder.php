<?php

use App\Round;
use Illuminate\Database\Seeder;

class RoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $round                = new Round();
        $round->bracket_round = false;
        $round->name          = 'Voorronde 1';
        $round->in_progress   = false;
        $round->finished      = true;
        $round->save();

        $round                = new Round();
        $round->bracket_round = false;
        $round->name          = 'Voorronde 2';
        $round->in_progress   = true;
        $round->finished      = false;
        $round->save();

        $round                = new Round();
        $round->bracket_round = false;
        $round->name          = 'Voorronde 3';
        $round->in_progress   = false;
        $round->finished      = false;
        $round->save();

        $round                = new Round();
        $round->bracket_round = true;
        $round->name          = 'Bracketronde 1';
        $round->in_progress   = false;
        $round->finished      = false;
        $round->save();
    }
}
