<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [

        "user_id",
        "status",
        "total_amount"

    ];

  
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product');
    }
}