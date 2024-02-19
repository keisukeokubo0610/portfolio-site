import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
            server: { // [tl! add:start]
                // port: 3000 // 例として3000を使用。利用可能な任意のポートに変更してください。
                hmr: {
                    host: 'localhost',
                },
            },

        }),
    ],
});

