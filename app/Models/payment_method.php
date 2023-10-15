<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_method extends Model
{
    protected $fillable = [
        'name',
        'create_date',
        'update_date'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
