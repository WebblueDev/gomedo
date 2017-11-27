<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;

class AssetGroup extends Model
{
    protected $guarded = [
        'id',
    ];

    public static function getEnums() {
        return ['product', 'user', 'provider', 'category', 'payment_method', 'product_testers'];
    }

    public function createdUser() {
        return $this->belongsTo(User::class , 'created_user_id');
    }
}
