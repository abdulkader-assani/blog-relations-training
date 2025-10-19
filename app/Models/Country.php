<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function Users(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, City::class);
    }

    public function posts()
    {
        // return $this->hasManyThrough(Post::class, User::class);
        return Post::whereHas('user.city', function ($query) {
            $query->where('country_id', $this->getKey());
        });
    }
    

}
