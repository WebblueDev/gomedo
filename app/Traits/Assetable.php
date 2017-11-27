<?php

namespace Gomedo\Traits;

trait Assetable {

    public function assets() {
        return $this->morphMany('App\Models\Asset', 'assetable');
    }

    // Funktionen hinzufügen, um Assets nach Gruppe zu bekommen
    // Collections
    // https://laravel.com/docs/5.5/eloquent-collections
}