<?php

namespace Gomedo\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'categories' => 'App\Models\Category',
            'images' => 'App\Models\Image',
            'pages' => 'App\Models\Page',
            'products' => 'App\Models\Product',
            'providers' => 'App\Models\Provider',
            'users' => 'App\Models\User',
            'videos' => 'App\Models\Video'
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
