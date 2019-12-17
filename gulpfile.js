const elixir = require('laravel-elixir');

/*require('laravel-elixir-vue-2');*/

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
    .styles([
        'bootstrap.min.css',
        'uikit.min.css',
        'all.min.css',
        'animate.min.css',
        'bootstrap-formhelpers.min.css',
        'style.css'
    ], 'public/css/application.css')

    .scripts([
        'jquery.min.js',
        'modernizr.min.js',
        'scrollreveal.js',
        'popper.min.js',
        'bootstrap.min.js',
        'uikit-icons.min.js',
        'uikit.min.js',
        'typeit.min.js',
        'bootstrap-formhelpers.min.js',
        'main.js',
        'turbolinks.js'
    ], 'public/js/application.js')

    .version(['public/css/application.css','public/js/application.js']);
});

/*elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js');
});
*/
