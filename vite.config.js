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
            'flowbite': '/node_modules/flowbite',
        },
    },
    build: {
        outDir: "./public/build",
        rollupOptions: {
            output: {
                manualChunks: undefined,
                assetFileNames: (assertInfo) => {
                    if (/\.(jpg|png|gif|svg)$/.test(assertInfo.name)) {
                        return 'images/[name][extansion]';
                    }
                    return 'assets/[name][extansion]';
                }
            },
            input: {
                app: "./assets/app.js"
            },
        },
    },
    server: {
        host: '0.0.0.0',
        port: 5173,
        origin: 'http://localhost:5173',
        hmr: {
            host: 'localhost',
            protocol: 'ws'
        },
        watch: {
            usePolling: true,
        }
    }
});