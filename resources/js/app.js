import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { createStore } from 'vuex'
import Toaster from "@meforma/vue-toaster";

const store = createStore({
    //
})


createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(Toaster)
            .use(store)
            .use(plugin)
            .mount(el)
    },
})
