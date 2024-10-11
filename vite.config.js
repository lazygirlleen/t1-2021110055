import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['products/css/app.css', 'products/js/app.js'],
            refresh: true,
        }),
    ],
});
