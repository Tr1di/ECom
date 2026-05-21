<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['title'])]
class Game extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function products(): HasMany {
        return $this->hasMany(Product::class);
    }
}
