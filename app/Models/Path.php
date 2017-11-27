<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    protected $guarded = [
        'id',
    ];

    public function entity() {
        return $this->belongsTo(Entity::class,'entity_id');
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
