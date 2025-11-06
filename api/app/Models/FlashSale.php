<?php

namespace Marvel\Models;

use Marvel\Database\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FlashSale extends Model
{
    protected $table = 'flash_sales';

    protected $fillable = [
        'product_id',
        'discount_percentage',
        'start_time',
        'end_time',
        'status',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
