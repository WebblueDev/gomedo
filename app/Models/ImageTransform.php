<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;

class ImageTransform extends Model
{
    protected $guarded = [
        'id',
    ];

    protected $attributes = [
        'aspect_ratio' => true,
        'crop_fit' => false,
        'greyscale' => false,
    ];

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
