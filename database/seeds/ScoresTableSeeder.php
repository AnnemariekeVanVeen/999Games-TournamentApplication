<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert([
            // Round 1
            [
                'user_id'       => 1,
                'round_id'      => 1,
                'game_table_id' => 1,
                'amount'        => 80,
                'weight'        => 50,
                'validated'     => true,
            ],
            [
                'user_id'       => 2,
                'round_id'      => 1,
                'game_table_id' => 1,
                'amount'        => 30,
                'weight'        => 40,
                'validated'     => true,
            ],
            [
                'user_id'       => 3,
                'round_id'      => 1,
                'game_table_id' => 1,
                'amount'        => 30,
                'weight'        => 25,
                'validated'     => true,
            ],
            [
                'user_id'       => 4,
                'round_id'      => 1,
                'game_table_id' => 1,
                'amount'        => 60,
                'weight'        => 40,
                'validated'     => true,
            ],
            [
                'user_id'       => 5,
                'round_id'      => 1,
                'game_table_id' => 2,
                'amount'        => 35,
                'weight'        => 24,
                'validated'     => true,
            ],
            [
                'user_id'       => 10,
                'round_id'      => 1,
                'game_table_id' => 2,
                'amount'        => 80,
                'weight'        => 50,
                'validated'     => true,
            ],
            [
                'user_id'       => 11,
                'round_id'      => 1,
                'game_table_id' => 2,
                'amount'        => 15,
                'weight'        => 5,
                'validated'     => true,
            ],
            [
                'user_id'       => 14,
                'round_id'      => 1,
                'game_table_id' => 2,
                'amount'        => 90,
                'weight'        => 60,
                'validated'     => true,
            ],
            [
                'user_id'       => 9,
                'round_id'      => 1,
                'game_table_id' => 3,
                'amount'        => 100,
                'weight'        => 75,
                'validated'     => true,
            ],
            [
                'user_id'       => 16,
                'round_id'      => 1,
                'game_table_id' => 3,
                'amount'        => 30,
                'weight'        => 20,
                'validated'     => true,
            ],
            [
                'user_id'       => 17,
                'round_id'      => 1,
                'game_table_id' => 3,
                'amount'        => 40,
                'weight'        => 12.5,
                'validated'     => true,
            ],
            // Round 2
            [
                'user_id'       => 3,
                'round_id'      => 2,
                'game_table_id' => 51,
                'amount'        => 20,
                'weight'        => 30,
                'validated'     => true,
            ],
            [
                'user_id'       => 14,
                'round_id'      => 2,
                'game_table_id' => 51,
                'amount'        => 15,
                'weight'        => 10,
                'validated'     => true,
            ],
            [
                'user_id'       => 1,
                'round_id'      => 2,
                'game_table_id' => 51,
                'amount'        => 60,
                'weight'        => 40,
                'validated'     => false,
            ],
            [
                'user_id'       => 5,
                'round_id'      => 2,
                'game_table_id' => 54,
                'amount'        => 35,
                'weight'        => 20,
                'validated'     => false,
            ],
            [
                'user_id'       => 11,
                'round_id'      => 2,
                'game_table_id' => 54,
                'amount'        => 65,
                'weight'        => 40,
                'validated'     => false,
            ],
            [
                'user_id'       => 6,
                'round_id'      => 2,
                'game_table_id' => 54,
                'amount'        => 15,
                'weight'        => 10,
                'validated'     => true,
            ],
            // Round 3
            [
                'user_id'       => 3,
                'round_id'      => 3,
                'game_table_id' => 123,
                'amount'        => 50,
                'weight'        => 33,
                'validated'     => false,
            ],
            [
                'user_id'       => 7,
                'round_id'      => 3,
                'game_table_id' => 123,
                'amount'        => 50,
                'weight'        => 33,
                'validated'     => false,
            ],
            [
                'user_id'       => 11,
                'round_id'      => 3,
                'game_table_id' => 123,
                'amount'        => 50,
                'weight'        => 33,
                'validated'     => false,
            ],
        ]);
    }
}
