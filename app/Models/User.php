<?php

namespace Gomedo\Models;

use Gomedo\Traits\Assetable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Assetable;

    protected $guarded = [
        'id', 'password', 'remember_token',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $with = [
        'entity',
    ];

    public function entity() {
        return $this->morphMany(Entity::class, 'entitable');
    }

    public function userProductLists() {
        return $this->hasMany(UserProductList::class, 'user_id');
    }

    public function reviews() {
        return $this->hasMany(Review::class, 'user_id');
    }

}
