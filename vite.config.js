import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/styles.css',
                'resources/css/swiper.min.css',
                'resources/css/markdown.css',
                'resources/js/app.js',
                'resources/js/form.js',
                'resources/js/main.js',
                'resources/js/swiper.min.js',
            ],
            refresh: true,
        }),
    ],
});
