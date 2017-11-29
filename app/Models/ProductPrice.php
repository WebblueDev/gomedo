<?php

namespace Gomedo\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $guarded = [
        'id',
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function provider() {
        return $this->belongsTo(Provider::class, 'provider_id');
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
