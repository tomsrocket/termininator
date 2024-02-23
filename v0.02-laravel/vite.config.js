import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
//                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
          '~font' : path.resolve(__dirname,'resources/assets/fonts')
        }
    }
});
