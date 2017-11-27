<?php

namespace Gomedo\Models;

use Gomedo\Traits\Assetable;
use Illuminate\Database\Eloquent\Model;
use Rutorika\Sortable\SortableTrait;

class Provider extends Model
{
    use Assetable, SortableTrait;

    protected static $sortableField = 'order';
    protected $guarded = [
        'id',
    ];

    public $with = [
        'entity',
    ];

    public function entity() {
        return $this->morphMany(Entity::class, 'entitable');
    }

    public function reviews() {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function products() {
        return $this->hasMany(ProductPrice::class,'provider_id');
    }

    public function paymentMethods() {
        return $this->belongsToMany(PaymentMethod::class, 'payment_methods_providers', 'provider_id', 'payment_method_id')
            ->withTimestamps();
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
