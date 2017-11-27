<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTest extends Model
{
    protected $guarded = [
        'id',
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function productTester() {
        return $this->belongsTo(ProductTester::class, 'product_tester_id');
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
