let mix = require('laravel-mix');

mix.js('resources/assets/js/backend/app.js', 'public/js/backend/main.js')
    .js('resources/assets/js/frontend/app.js', 'public/js/frontend/main.js')
    .sass('resources/assets/sass/backend/app.scss', 'public/css/backend/main.css')
    .sass('resources/assets/sass/frontend/app.scss', 'public/css/frontend/main.css')

if (mix.inProduction()) {
    mix.version();
}