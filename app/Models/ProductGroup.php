<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    protected $guarded = [
        'id',
    ];

    public function products() {
        return $this->belongsToMany(Product::class, 'products_product_groups', 'product_group_id', 'product_id')
            ->withTimestamps();
    }

    public function productGroupType() {
        return $this->belongsTo(ProductGroupType::class, 'product_group_type_id');
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
