import { InertiaApp } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import Vuetify from '../plugins/vuetify';


Vue.prototype.$route = (...args) => route(...args).url()
Vue.use(InertiaApp)

const app = document.getElementById('app')

new Vue({
    vuetify: Vuetify,
    render: h => h(InertiaApp, {
        props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: name => import(`@/Pages/${name}`).then(module => module.default),
        },
    }),
}).$mount(app)