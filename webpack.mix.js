let mix = require('laravel-mix');

mix.js('resources/assets/js/backend/app.js', 'public/backend/js/main.js')
    .js('resources/assets/js/frontend/app.js', 'public/frontend/js/main.js')
    .sass('resources/assets/sass/backend/app.scss', 'public/backend/css/main.css')
    .sass('resources/assets/sass/frontend/app.scss', 'public/frontend/css/main.css')
    .options({
        processCssUrls: false
    });

if (mix.inProduction()) {
    mix.version();
}