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
    "resources/views/assets/js/datatables/css/jquery.dataTables.min.css",
    "resources/views/assets/js/datatables/css/responsive.dataTables.min.css",
    "resources/views/assets/css/DataTables_boot.css",
], "public/assets/css/datatables.css")

.styles([
    "resources/views/assets/css/auxiliar.css",
    "resources/views/assets/css/grade.css",
    "resources/views/assets/css/style.css",
], "public/assets/css/app.css")

.scripts([
    "resources/views/assets/js/jquery.min.js"
], "public/assets/js/jquery.js")

.scripts([
    "resources/views/assets/js/tinymce/tinymce.min.js",
    "resources/views/assets/js/datatables/js/jquery.dataTables.min.js",
    "resources/views/assets/js/datatables/js/dataTables.responsive.min.js",
    "resources/views/assets/js/jquery.form.js",
    "resources/views/assets/js/jquery.mask.js",
], "public/assets/js/diversos.js")

.scripts([
    "resources/views/assets/js/js.js"
], "public/assets/js/js.js")

.scripts([
    "resources/views/assets/js/js_entrada.js"
], "public/assets/js/js_entrada.js")

.scripts([
    "resources/views/assets/js/js_saida.js"
], "public/assets/js/js_saida.js")

.scripts([
    "resources/views/assets/js/js_item_ordem_compra.js"
], "public/assets/js/js_item_ordem_compra.js")

.scripts([
    "resources/views/assets/js/grafico.js"
], "public/assets/js/grafico.js")

.scripts([
    "resources/views/assets/js/funcao.js"
], "public/assets/js/funcao.js")

.copyDirectory("resources/views/assets/js/datatables", "public/assets/js/datatables")
.copyDirectory("resources/views/assets/js/tinymce", "public/assets/js/tinymce")
.copyDirectory("resources/views/assets/js/chart.js", "public/assets/js/chart.js")
.copyDirectory("resources/views/assets/img", "public/assets/img");
