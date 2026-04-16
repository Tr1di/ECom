<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['title', 'description', 'price', 'game_id'])]
class Product extends Model
{
    use SoftDeletes;

    public function game(): BelongsTo {
        return $this->belongsTo(Game::class);
    }
}
