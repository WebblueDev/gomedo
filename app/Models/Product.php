<?php

namespace Gomedo\Models;

use Gomedo\Traits\Assetable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Assetable;

    protected $guarded = [
        'id',
    ];

    public $with = [
        'entity',
    ];

    public function prices() {
        return $this->hasMany(ProductPrice::class,'product_id');
    }

    public function tests() {
        return $this->hasMany(ProductTest::class,'product_id');
    }

    public function productFields() {
        return $this->belongsToMany(ProductField::class, 'product_fields_products', 'product_id', 'product_field_id')
            ->withPivot('string_value','text_value','number_value','boolean_value','date_value','product_field_data_id')
            ->withTimestamps();
    }

    public function productGroups() {
        return $this->belongsToMany(ProductGroup::class, 'products_product_groups', 'product_id', 'product_group_id')
            ->withTimestamps();
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'products_categories', 'product_id', 'category_id')
            ->withTimestamps();
    }

    public function entity() {
        return $this->morphMany(Entity::class, 'entitable');
    }

    public function reviews() {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
