import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/js/bootstrap.js',
                'resources/js/jquery.min.js',
                'resources/js/popper.min.js',
                'resources/js/bootstrap.bundle.min.js',
                'resources/js/jquery-3.0.0.min.js',
                'resources/js/plugin.js',
                'resources/js/jquery.mCustomScrollbar.concat.min.js',
                'resources/js/custom.js',
                'resources/js/owl.carousel.js',
                'resources/css/responsive.css',
                'resources/css/jquery.mCustomScrollbar.min.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/owl.theme.default.min.css',

            ],
            refresh: true,
        }),
    ],
});
