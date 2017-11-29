<?php

namespace Gomedo\Models;

use Gomedo\Traits\Assetable;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait, Assetable;

    protected $attributes = [
        'is_listed' => true,
    ];

    protected $guarded = [
        'id',
    ];

    public $with = [
        'entity',
    ];

    public function entity() {
        return $this->morphMany(Entity::class, 'entitable');
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'products_categories', 'category_id', 'product_id')
            ->withTimestamps();
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
