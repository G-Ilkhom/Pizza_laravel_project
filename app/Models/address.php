<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $fillable = [
        'city',
        'street',
        'house',
        'flat',
        'entrance',
        'floor',
        'intercom',
        'barrier',
        'comment',
        'create_date',
        'update_date'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
