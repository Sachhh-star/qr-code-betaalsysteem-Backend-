<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dish extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function allergens(){
        return $this->belongsToMany(Allergen::class);
    }
    //
}
