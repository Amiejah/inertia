import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
import { InertiaLink } from '@inertiajs/inertia-vue';
// import { ZiggyVue } from 'ziggy';
// import { Ziggy } from './ziggy';


InertiaProgress.init()
Vue.component('inertia-link', InertiaLink);
// Vue.use(ZiggyVue);
Vue.prototype.$route = route


createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props }) {
    new Vue({
      render: h => h(App, props),
    }).$mount(el)
  },
})
