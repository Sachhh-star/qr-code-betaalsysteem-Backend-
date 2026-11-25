<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['order_id', 'provider', 'provider_payment_id', 'amount', 'status'])]

class Payment extends Model
{
    public function order(){
        return $this->belongsTo(Order::class);
    }
    //
}
