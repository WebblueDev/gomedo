<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [
        'id',
    ];

    public function assets() {
        return $this->morphMany(Asset::class, 'mediable');
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
