<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'payment_id', 'quantity', 'amount', 'currency', 'payment_status', 'payment_method', 'user_id', 'order_id'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}