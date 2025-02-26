import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/scss/main.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "~": path.resolve(__dirname, "node_modules"),
        },
    },
    css: {
        postcss: "./postcss.config.js",
        preprocessorOptions: {
            scss: {
                quietDeps: true,
            },
        },
    },
});
