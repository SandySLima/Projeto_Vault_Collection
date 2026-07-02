<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CollectionItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'franchise_id',
        'name',
        'manufacturer',
        'series',
        'character',
        'edition',
        'image',
        'quantity',
        'purchase_date',
        'purchase_price',
        'estimated_price',
        'condition',
        'storage_location',
        'photo',
        'notes',
        'is_favorite',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function franchise()
    {
        return $this->belongsTo(Franchise::class);
    }
}