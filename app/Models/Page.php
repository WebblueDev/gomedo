<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [
        'id',
    ];

    public $with = [
        'entity',
    ];

    public function entity() {
        return $this->morphMany(Entity::class, 'entitable');
    }

    public function pageLayout() {
        return $this->belongsTo(PageLayout::class,'page_layout_id');
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
