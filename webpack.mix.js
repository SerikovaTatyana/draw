let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
/*
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

   */
// Все файлы стилей для фронтенда

mix.styles([

	'resources/assets/css/style.css',
	'resources/assets/css/css_mobile.css'

	], 'public/css/all_style.css');

// Копируем картинки
mix.copy('resources/assets/img', 'public/img');
// Копируем шрифт 
mix.copy('resources/assets/fonts', 'public/fonts');