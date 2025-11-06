<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Media extends Model
{
    protected $table = 'media';

    protected $fillable = [
        'model_type',
        'model_id',
        'uuid',
        'collection_name',
        'name',
        'file_name',
        'mime_type',
        'disk',
        'conversions_disk',
        'size',
        'manipulations',
        'generated_conversions',
        'custom_properties',
        'responsive_images',
        'order_column',
    ];

    protected $casts = [
        'manipulations' => 'array',
        'generated_conversions' => 'array',
        'custom_properties' => 'array',
        'responsive_images' => 'array',
        'size' => 'integer',
        'order_column' => 'integer',
    ];

    public function model(): MorphTo
    {
        return $this->morphTo();
    }
}