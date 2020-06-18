import '@mdi/font/css/materialdesignicons.css'
import Vue from 'vue'
import Vuetify from 'vuetify/lib'

Vue.use(Vuetify, {
    iconfont: 'mdi'
})

const opts = {
    theme: {
        dark: false,
    }
}

export default new Vuetify(opts)
