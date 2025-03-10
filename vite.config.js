import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        
    ],
    watch: {
        include: ["resources/**"],
    },
    server: {
        host: 'cotizador-equisol.test',
        watch: {
            usePolling: true,
        },
    },
    resolve: {
        alias: {
            '$': 'jQuery',
        },
    },
});
