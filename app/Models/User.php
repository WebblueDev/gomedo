<?php

namespace Gomedo\Models;

use Gomedo\Notifications\PasswordReset;
use Gomedo\Traits\Assetable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Assetable;

    protected $guarded = [
        'id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $with = [
        'entity',
    ];

    protected $attributes = [
        'is_admin' => false,
        'is_active' => true,
        'is_verified' => false,
        'is_banned' => false,
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

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordReset($token));
    }

}
