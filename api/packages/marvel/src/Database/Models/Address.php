<?php

namespace Marvel\Database\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    protected $table = 'address';

    protected $fillable = [
        'title',
        'type',
        'default',
        'address',
        'customer_id',
    ];

    protected $casts = [
        'address' => 'array',
        'default' => 'boolean',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}