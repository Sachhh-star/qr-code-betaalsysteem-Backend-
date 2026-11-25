<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['number', 'qr_token', 'is_active'])]
class RestaurantTable extends Model
{
    public function orders(){
        return $this->hasMany(Order::class);
    }
    //
}
