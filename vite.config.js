import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',  // Ensure the correct paths for CSS and JS
                'resources/js/app.js',
            ],
            refresh: true,  // Hot reloading for development
        }),
    ],
    build: {
        manifest: true,    // Ensure the manifest is generated
        outDir: 'public/build', // Ensure output goes to the right folder
    },
});
