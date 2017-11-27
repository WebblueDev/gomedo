<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;
use Rutorika\Sortable\SortableTrait;

class Asset extends Model
{
    use SortableTrait;

    protected static $sortableField = 'order';
    protected static $sortableGroupField = ['assetable_id','assetable_type','asset_group_id'];
    protected $guarded = [
        'id',
    ];

    public function assetable() {
        return $this->morphTo();
    }

    public function mediable() {
        return $this->morphTo();
    }

    public function AssetGroup() {
        return $this->belongsTo(AssetGroup::class, 'asset_group_id');
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
