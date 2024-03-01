<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_master_id',
        'dish_id',
        'day',
        'qty',
        'status'
    ];

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }

    public function order_master()
    {
        return $this->belongsTo(OrderMaster::class);
    }
    
}
