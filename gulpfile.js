var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy('resources/assets/vendor/bootstrap/dist/css/bootstrap.css', 'public/css/');
    mix.copy('resources/assets/vendor/bootstrap/dist/css/bootstrap-theme.css', 'public/css/');
    mix.copy('resources/assets/vendor/bootstrap/dist/css/bootstrap.css.map', 'public/css/');
    mix.copy('resources/assets/vendor/bootstrap/dist/css/bootstrap-theme.css.map', 'public/css/');

    mix.less('app.less');
});
