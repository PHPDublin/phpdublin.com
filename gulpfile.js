var elixir      = require('laravel-elixir');
var gulp        = require('gulp');
var BrowserSync = require('laravel-elixir-browser-sync');

require('laravel-elixir-imagemin');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
       .browserify('app.js')
       .imagemin('./resources/assets/images', 'public/images')
       .version(['css/app.css', 'js/app.js'])
       .copy(
            'node_modules/bootstrap-sass/assets/fonts/bootstrap',
            'public/fonts/bootstrap'
        )
       .browserSync([
           'app/**/*',
           'public/**/*',
           'resources/**/*'
       ], {
           proxy: 'phpdublin.local'
       });
});
