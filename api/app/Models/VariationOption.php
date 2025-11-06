<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VariationOption extends Model
{
    protected $table = 'variation_options';

    protected $fillable = [
        'title',
        'image',
        'price',
        'sale_price',
        'quantity',
        'is_disable',
        'sku',
        'options',
        'product_id',
        'is_digital',
    ];

    protected $casts = [
        'options' => 'json',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
