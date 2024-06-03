import {defineConfig} from "vite";

export default defineConfig({
    base: "/assets",
    server: {
        origin: "http://universalmarks.localhost:5173"
    },
    build: {
        copyPublicDir: false,
        outDir: "public/assets",
        assetsDir: "",
        manifest: true,
        rollupOptions: {
            input: {
                app: "resources/js/app.js"
            }
        },
        target: "esnext"
    }
});