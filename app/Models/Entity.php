<?php

namespace Gomedo\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Entity extends Model
{
    use Sluggable;

    protected $attributes = [
        'is_active' => true,
    ];

    protected $guarded = [
        'id',
    ];

    public $with = [
        'entitable',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function entitable() {
        return $this->morphTo();
    }

    public function paths() {
        return $this->hasMany(Path::class);
    }

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}
