var elixir      = require('laravel-elixir');
var gulp        = require('gulp');
<<<<<<< HEAD
=======
var BrowserSync = require('laravel-elixir-browser-sync');
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8

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
<<<<<<< HEAD
        );
=======
        )
       .browserSync([
           'app/**/*',
           'public/**/*',
           'resources/**/*'
       ], {
           proxy: 'phpdublin.local'
       });
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
});
