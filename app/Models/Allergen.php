<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['name'])]

class Allergen extends Model
{
    public function dishes(){
        return $this->belongsToMany(Dish::class);
    }
    //
}
