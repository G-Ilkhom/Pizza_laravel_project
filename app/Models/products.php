<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'name',
        'category',
        'composition',
        'calories',
        'create_date',
        'update_date'
    ];

    public function product_categories()
    {
        return $this->belongsTo(product_categories::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
