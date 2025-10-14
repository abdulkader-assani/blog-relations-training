<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Reactionable extends Pivot
{
    protected $fillable = [
        'user_id',
    ];
}
