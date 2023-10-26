import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { createStore } from 'vuex'
import Toaster from "@meforma/vue-toaster";
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'

const store = createStore({
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
            .use('VueDatePicker', VueDatePicker)
            .use(plugin)
            .mount(el)
    },
})
