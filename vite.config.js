import { defineConfig } from "vite";
import symfonyPlugin from "vite-plugin-symfony";
import vue from '@vitejs/plugin-vue'
import path from 'path'

export default defineConfig({
    plugins: [
        vue(),
        symfonyPlugin({
            viteDevServerHostname: 'localhost'
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './assets'),
        },
    },
    root: ".",
    base: "/build/",
    publicDir: false,
    build: {
        reportCompressedSize: true,
        manifest: true,
        emptyOutDir: true,
        assetsDir: "",
        outDir: "./public/build",
        rollupOptions: {
            input: {
                app: "./assets/app.js"
            },
        },
    },
    server: {
        host: '0.0.0.0',
        port: 5173,
        proxy: {
            '/api': {
                target: 'http://192.168.188.136:8000',  // Symfony-Backend
                changeOrigin: true,
                secure: false,
            },
        },
        hmr: false,
        watch: {
            usePolling: true
        }
    },
});