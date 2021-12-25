let mix = require('laravel-mix');

mix.setPublicPath('public');
mix.js('src/resources/assets/js/app.js', 'assets/js/app.min.js').version();
mix.sass('src/resources/assets/scss/app.scss', 'assets/css/app.min.css').version();