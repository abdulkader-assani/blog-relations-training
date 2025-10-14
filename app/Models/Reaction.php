<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'reactionable');
    }

    public function comments()
    {
        return $this->morphedByMany(Comment::class, 'reactionable');
    }

    public function users(): BelongsToMany
    {
        return $this->BelongsToMany(User::class, 'reactionable');
    }
}
