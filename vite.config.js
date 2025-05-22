import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import {viteStaticCopy} from 'vite-plugin-static-copy'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'node_modules/@tabler/core/dist/img',
                    dest: '../dist'
                },
                {
                    src: 'node_modules/@tabler/icons-webfont/dist/fonts',
                    dest: '../build/assets'
                }
            ]
        })
    ],
    server: {
    host: '0.0.0.0', // <- Permite acceso externo
    port: 5173,
    hmr: {
        host: '192.168.15.21', // <- Tu IP LAN real (la que usas en tu iPhone)
        protocol: 'ws',
    },

    },
    build: {
        commonjsOptions: {
            transformMixedEsModules: true
        }
    }
});
