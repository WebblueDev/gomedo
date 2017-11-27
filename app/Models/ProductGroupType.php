<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;
use Rutorika\Sortable\SortableTrait;

class ProductGroupType extends Model
{
    use SortableTrait;

    protected static $sortableField = 'order';
    protected $guarded = [
        'id',
    ];

    public function productGroups() {
        return $this->hasMany(ProductGroup::class);
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
