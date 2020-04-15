<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameTable extends Model
{
    protected $fillable = [
        'name'
    ];

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function rounds()
    {
        return $this->belongsToMany(Round::class, 'scores', 'game_table_id', 'round_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'scores', 'game_table_id')->using(Score::class)->withPivot(['round_id', 'amount']);
    }
}
