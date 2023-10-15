<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'address_id',
        'payment_method_id',
        'delivery_method_id',
        'create_date',
        'update_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function payment_method()
    {
        return $this->belongsTo(payment_method::class);
    }

    public function delivery_method()
    {
        return $this->belongsTo(delivery_method::class);
    }

    public function products()
    {
        return $this->belongsToMany(products::class);
    }
}
