require('./bootstrap');

window.Vue = require('vue');
import Vuex from 'vuex'
Vue.use(Vuex)

import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);

import Fragment from 'vue-fragment'
Vue.use(Fragment.Plugin)

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import swal from 'sweetalert';

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import index from './store/index'
import detail from './store/detail'

const store = new Vuex.Store({
    modules: {
        index,
        detail
    }
})
import { filter } from './filter'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import { routes } from './route';
const router = new VueRouter({
    routes, // short for `routes: routes`
    mode: 'history'//by detault # mode
})



const app = new Vue({
    el: '#app',
    router,
    store
});
