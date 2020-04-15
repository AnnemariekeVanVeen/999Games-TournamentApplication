<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Score extends Pivot
{
    protected $table = 'scores';

    protected $fillable = [
        'amount', 'weight', 'validated'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function round()
    {
        return $this->belongsTo(Round::class);
    }

    public function game_table()
    {
        return $this->belongsTo(GameTable::class, 'game_table_id');
    }
}
