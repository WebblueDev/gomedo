<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [
        'id',
    ];

    public function assets() {
        return $this->morphMany('App\Models\Asset', 'mediable');
    }

    public function imageTransform() {
        return $this->belongsTo(ImageTransform::class,'image_transform_id');
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
