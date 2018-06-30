<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'slug',
        'thumbnail_id'
    ];

    public function path()
    {
        return '/posts/' . $this->id;
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function excerpt(int $length = 150): string
    {
        return str_limit($this->body, $length, $end = '...');
    }

    public function latest(Builder $query): Builder
    {
        return $this->orderBy('created_at', 'desc')->paginate(5);
    }
}
