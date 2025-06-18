import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/exercises/UnjumbleIt.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
        host: '0.0.0.0',
        origin: 'http://localhost:5173',
        // origin: 'https://aprendendo-ingles.onrender.com/',
        port: 5173,
    },
    // base: '/build/',
});