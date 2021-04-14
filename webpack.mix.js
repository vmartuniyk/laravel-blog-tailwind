const mix = require('laravel-mix');

require('mix-tailwindcss');

 mix.js('resources/js/app.js', 'public/js')
 
 mix.sass('resources/sass/app.scss', 'public/css')
 .tailwind();