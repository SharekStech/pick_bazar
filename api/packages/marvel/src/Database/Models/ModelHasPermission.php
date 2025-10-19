<?php

namespace Marvel\Database\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ModelHasPermission extends Pivot
{
    protected $table = 'model_has_permissions';
    
    public $timestamps = false;
    
    protected $fillable = [
        'permission_id',
        'model_type',
        'model_id',
    ];
}