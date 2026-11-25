<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'sort_order'])]

class Category extends Model
{
    public function dishes(){
         return $this->hasMany(Dish::class);
    }
    //
}
