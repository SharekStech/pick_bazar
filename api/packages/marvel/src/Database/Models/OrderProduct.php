<?php

namespace Marvel\Database\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderProduct extends Model
{
    use SoftDeletes;

    protected $table = 'order_product';

    protected $fillable = [
        'order_id',
        'product_id',
        'variation_option_id',
        'order_quantity',
        'unit_price',
        'subtotal',
    ];

    protected $casts = [
        'order_quantity' => 'integer',
        'unit_price' => 'decimal:2',
        'subtotal' => 'decimal:2',
    ];
}