<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;
use Rutorika\Sortable\SortableTrait;

class ProductField extends Model
{
    use SortableTrait;

    protected static $sortableField = 'order';
    protected $guarded = [
        'id',
    ];

    public static function getEnums() {
        return ['string', 'number', 'text', 'data', 'boolean', 'date'];
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'product_fields_products', 'product_field_id', 'product_id')
            ->withTimestamps();
    }

    public function productFieldData() {
        return $this->hasMany(ProductFieldData::class);
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id')
            ->withTimestamps();
    }
}
