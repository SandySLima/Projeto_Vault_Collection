<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function collectionItems(): HasMany
    {
        return $this->hasMany(CollectionItem::class);
    }

        public function items()
    {
        return $this->hasMany(\App\Models\CollectionItem::class);
    }
}
