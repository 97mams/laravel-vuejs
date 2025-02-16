import { createApp, h } from 'vue'
import type { DefineComponent } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3'
import { createRouter, createWebHistory } from 'vue-router';

const router = createRouter({
    history: createWebHistory(),
    routes
})

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`] as Promise<DefineComponent>;
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
        app.use(router)
        app.use(plugin)
        app.mount(el)
    },
})