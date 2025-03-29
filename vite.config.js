import { defineConfig } from "vite";
import symfonyPlugin from "vite-plugin-symfony";
import vue from '@vitejs/plugin-vue'
import path from 'path'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        vue(),
        tailwindcss(),
        symfonyPlugin({
            viteDevServerHostname: 'localhost'
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './assets'),
        },
    },
    build: {
        outDir: "./public/build",
        rollupOptions: {
            output: {
                manualChunks: undefined,
                assetFileNames: (assetInfo) => {
                    if (/\.(jpg|png|gif|svg)$/.test(assetInfo.name)) {
                        return 'images/[name].[ext]';  // Use [ext] instead of [extension]
                    }
                    return 'assets/[name].[ext]';  // Use [ext] instead of [extension]
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
        cors: true,
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