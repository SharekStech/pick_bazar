<?php

namespace Marvel\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

 protected $fillable = [
        'office_id',
        'type',
        'name',
        'address',
        'lat',
        'lng',
    ];

    /**
     * Relationship: Store belongs to an Office
     */
    public function office()
    {
        return $this->belongsTo(Office::class);
    }


}
