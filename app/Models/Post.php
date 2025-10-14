<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    protected $fillable = [
        'title',
        'text',
        'user_id',
        'category_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function posts_reactions(): HasMany
    {
        return $this->hasMany(Posts_Reaction::class);
    }
// ------------------------------------------------------
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
    }

    public function reactions(): MorphToMany
    {
        return $this->morphToMany(Reaction::class, 'reactionable')->withTimestamps();
    }
}
