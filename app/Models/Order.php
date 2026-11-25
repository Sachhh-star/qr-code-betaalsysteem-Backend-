<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function restaurantTable(){
        return $this->belongsTo(RestaurantTable::class);
    }

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }
    //
}
