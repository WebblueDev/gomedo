<?php

namespace Gomedo\Models;

use Gomedo\Traits\Assetable;
use Illuminate\Database\Eloquent\Model;
use Rutorika\Sortable\SortableTrait;

class ProductTester extends Model
{
    use Assetable, SortableTrait;

    protected static $sortableField = 'order';
    protected $guarded = [
        'id',
];

    public function tests() {
        return $this->hasMany(ProductTest::class,'product_tester_id');
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
