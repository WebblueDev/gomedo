<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;
use Rutorika\Sortable\SortableTrait;

class ProductFieldData extends Model
{
    use SortableTrait;

    protected static $sortableField = 'order';
    protected static $sortableGroupField = 'product_field_id';

    protected $guarded = [
        'id',
    ];

    public function productField() {
        return $this->belongsTo(ProductField::class);
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
