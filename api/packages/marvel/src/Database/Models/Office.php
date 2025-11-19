<?php

namespace Marvel\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'name',
        'type',
        'parent_id',
        'address',
        'lat',
        'lng'
    ];

    protected $casts = [
        'lat' => 'double',
        'lng' => 'double'
    ];

    public function parent()
    {
        return $this->belongsTo(Office::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Office::class, 'parent_id');
    }
}