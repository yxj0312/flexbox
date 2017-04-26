const elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');
var postStylus = require('poststylus');
var csslibs = [
	'./node_modules/font-awesome/css/font-awesome.min.css'
];

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
/**
 * 
 *  mix
       .sass('app.sass')
 * 
 */
elixir(mix => {
   mix.
   		stylus('app.styl', null, {
   			use: [postStylus(['lost', 'postcss-position'])]
		})
       .webpack('app.js')
       .styles(csslibs, './public/css/libs.css')
       .copy('./node_modules/font-awesome/fonts', 'public/fonts');
});
