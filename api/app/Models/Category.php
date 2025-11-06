<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Marvel\Traits\TranslationTrait;

class Category extends Model
{
    use TranslationTrait, Sluggable;


    protected $table = 'categories';

    public $guarded = [];

    protected $casts = [
        'image' => 'json',
    ];

    protected $appends = ['parent_id', 'translated_languages'];

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getParentIdAttribute()
    {
        if (isset($this->attributes['parent'])) {
            return $this->parent;
        }
    }


    public function scopeWithUniqueSlugConstraints(Builder $query, Model $model): Builder
    {
        return $query->where('language', $model->language);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    /**
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    /**
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }

    /**
     * @return HasMany
     */
    public function children()
    {
        return $this->hasMany('Marvel\Database\Models\Category', 'parent', 'id')->with('children')->withCount('products');
    }

    /**
     * @return HasMany
     */
    public function subCategories()
    {
        return $this->hasMany('Marvel\Database\Models\Category', 'parent', 'id')->with('subCategories', 'parent')->withCount('products');
    }

    /**
     * @return HasOne
     */
    public function parent()
    {
        return $this->hasOne('Marvel\Database\Models\Category', 'id', 'parent')->with('parent');
    }

    // Marvel\Database\Models\Category.php

    public function getImageAttribute($value)
    {
        if (empty($value)) return null;

        $images = is_array($value) ? $value : json_decode($value, true);

        foreach ($images as &$image) {
            if (isset($image['original'])) {
                // এখানে full URL বানাও
                $image['original'] = url($image['original']);
            }
        }

        // যদি single image হয়, array[0] return করতে পারো, নাহলে পুরো array
        return count($images) === 1 ? $images[0] : $images;
    }
}
