import { defineConfig } from 'vite';
import { liveReload } from 'vite-plugin-live-reload';

export default defineConfig({
    plugins: [
        liveReload([
            __dirname + './*.php',
        ]),
    ],
    root: './',
    base: 'http://localhost',
    rollupOptions: {
        input: {
            'index.php': './index.php'
        }
    },
    build: {       
        outDir: './dist',
        emptyOutDir: true,
        manifest: true
    },
    server: {
        base: 'http://localhost',
        port: 8080
    },
})