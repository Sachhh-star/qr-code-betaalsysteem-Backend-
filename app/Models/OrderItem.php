<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['order_id', 'dish_id', 'quantity', 'unit_price', 'note'])]

class OrderItem extends Model
{
    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function dish(){
        return $this->belongsTo(Dish::class);
    }
    //
}
