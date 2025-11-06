<?php

namespace Marvel\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'speciality',
        'experience_years',
        'languages',
        'location',
        'rating',
        'reviews_count',
        'fee',
        'address',
        'profile',
        'cover_image',
    ];
    protected $appends = ['profile_url', 'cover_image_url'];

    public function schedules(): HasMany
    {
        return $this->hasMany(DoctorSchedule::class);
    }
    public function getProfileUrlAttribute()
    {
        return $this->profile
            ? asset($this->profile)
            : null;
    }

    public function getCoverImageUrlAttribute()
    {
        return $this->cover_image
            ? asset($this->cover_image)
            : null;
    }
}
