const mix = require('laravel-mix');

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

mix
    .styles([
        'resources/views/admin/dist/css/styles.css'
    ], 'public/backend/views/admin/css/template.css')

    .styles([
        'resources/views/admin/dist/css/dataTables.bootstrap4.min.css'
    ], 'public/backend/views/admin/css/dataTables.bootstrap4.css')

    .styles([
        'resources/views/public/assets/css/styles.css'
    ], 'public/css/styles.css')

    .scripts([
        'resources/views/admin/dist/js/all.min.js',
        'resources/views/admin/dist/js/jquery-3.5.1.min.js',
        'resources/views/admin/dist/js/bootstrap.bundle.min.js',
    ], 'public/backend/views/admin/js/libs.js')

    .scripts([
        'resources/views/admin/dist/js/scripts.js'
    ], 'public/backend/views/admin/js/scripts.js')

    .scripts([
        'resources/views/admin/dist/js/jquery.dataTables.js',
        'resources/views/admin/dist/js/dataTables.bootstrap4.js'
    ], 'public/backend/views/admin/js/datatable.js')

    .scripts([
        'resources/views/admin/dist/js/dtconfig.js'
    ], 'public/backend/views/admin/js/datatable_config.js')

    .copyDirectory('resources/views/public/assets/images', 'public/assets/images')

    .version();
