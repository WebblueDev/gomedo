<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;

class UserProductList extends Model
{
    protected $guarded = [
        'id',
    ];

    public function products() {
        return $this->belongsToMany(Product::Class, 'user_product_lists_products', 'user_product_list_id', 'product_id')
            ->withPivot('price_alarm', 'created_user_id')
            ->withTimestamps();
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
