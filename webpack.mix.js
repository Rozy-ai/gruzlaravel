const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
 // mix.js(
	// 'resources/admin/bootstrap.bundle.min.js',
 // 	'public/js/admin.js')
 // .js(
	//  'resources/admin/dashboard.js',
 // 	'public/js/admin.js')
//   mix.scripts([
// 'resources/admin/bootstrap.bundle.min.js',
// 'resources/admin/bundle.js',
//  	], 'public/js/admin.js' );
//  mix.styles([
// 'resources/admin/bootstrap.min.css',
// 'resources/admin/font-awesome.min.css',
// 'resources/admin/dashboard.css',
// 'resources/admin/bundle.css',
//  	], 'public/css/admin.css' );
//     // .postCss(
//     // 	'resources/admin/bootstrap.min.css',
//     // 	 'public/css/admin.css')
//     // .postCss(
//     // 	'resources/admin/bootstrap.min.css',
//     // 	 'public/css/admin.css');

//      mix.copy('resources/admin/fonts', 'public/fonts');

       mix.scripts([
'resources/admin/bootstrap.bundle.min.js',
'resources/front/jquery.countup.js',
'resources/front/jquery.waypoints.min.js',
'resources/front/slick.min.js',
'resources/front/main.js',
  ], 'public/js/front.js' );
 mix.styles([
'resources/admin/bootstrap.min.css',
'resources/front/font-awesome.min.css',
'resources/front/slick.css',
'resources/front/slick-theme.css',
'resources/front/style.css',
'resources/front/media.css',
  ], 'public/css/front.css' );


     mix.copy('resources/front/img', 'public/img');
