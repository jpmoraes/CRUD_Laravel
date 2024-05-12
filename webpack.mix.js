const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
   .sass('resources/css/app.scss', 'public/css')
   .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
   .babel([
      'node_modules/bootstrap/dist/js/bootstrap.bundle.js', // opcional, se precisar do JavaScript do Bootstrap
  ], 'public/js/bootstrap.bundle.js');

   