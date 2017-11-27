<?php

namespace Gomedo\Models;

use Gomedo\Traits\Assetable;
use Illuminate\Database\Eloquent\Model;
use Rutorika\Sortable\SortableTrait;

class PaymentMethod extends Model
{
    use Assetable, SortableTrait;

    protected static $sortableField = 'order';

    protected $guarded = [
        'id',
    ];

    public function providers() {
        return $this->belongsToMany(Provider::class, 'payment_methods_providers', 'payment_method_id', 'provider_id')
            ->withTimestamps();
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
