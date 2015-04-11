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

    mix.less([
	'../vendor/bootstrap/less/bootstrap.less',
	'../vendor/startbootstrap-grayscale/less/grayscale.less',
	'../vendor/components-font-awesome/less/font-awesome.less',
	'app.less']);

    mix.copy('resources/assets/vendor/components-font-awesome/fonts', 'public/fonts');

    mix.scripts(['../assets/vendor/jquery/dist/jquery.js'], 'public/js/jquery.js')
	.scriptsIn(['resources/assets/vendor/bootstrap/js'], 'public/js/bootstrap.js')
	.scripts(['../assets/vendor/startbootstrap-grayscale/js/grayscale.js'], 'public/js/grayscale.js')
	.scriptsIn(['resources/js'], 'public/js/app.js')
	.scripts(['../assets/vendor/jquery.easing/js/jquery.easing.js'], 'public/js/jquery.easing.js')
})
