<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'prefix', 'last_name', 'email', 'password', 'cancelled', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function rounds()
    {
        return $this->belongsToMany(User::class, 'scores', 'round_id', 'user_id');
    }

    public function game_tables()
    {
        return $this->belongsToMany(GameTable::class, 'scores', 'user_id', 'game_table_id');
    }
}
