let  mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js/script.js')
    .postCss('resources/css/app.css', 'public/css/style.css', []);


mix.options({
    hmrOptions: {
        host: "localhost",
        port: 8000
    }
})