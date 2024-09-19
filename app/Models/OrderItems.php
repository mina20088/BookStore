<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderItems extends Pivot
{
    use HasFactory;

    protected $table = 'order_item';

    protected $fillable = [
        'order_id',
        'book_id',
        'quantity',
         'price',
    ];
}
