<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;

class PageLayout extends Model
{
    protected $guarded = [
        'id',
    ];

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
