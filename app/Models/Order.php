<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JetBrains\PhpStorm\ArrayShape;


class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_date',
        'user_id',
        'order_status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

/*    public function books():BelongsToMany
    {
        return $this->belongsToMany(Book::class)->withPivot('quantity','price');
    }*/


    public function OrderItems(): BelongsToMany
    {
        return $this->belongsToMany(OrderItems::class,'order_items');
    }


    #[ArrayShape(['order_date' => 'date', 'order_status' => 'integer'])]
    protected function casts(): array
    {
        return [
            'order_date' => 'date',
            'order_status' => OrderStatus::class,
        ];
    }
}
