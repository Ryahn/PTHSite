<?php

namespace App;

use Actuallymab\LaravelComment\CanComment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Overtrue\LaravelFollow\Traits\{CanFavorite,CanFollow,CanLike,CanSubscribe,CanVote};

class User extends Authenticatable
{
    use Notifiable, CanComment, CanFollow, CanLike, CanFavorite, CanSubscribe, CanVote;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
