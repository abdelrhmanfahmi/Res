import Vue from "vue";
import App from "./App.vue";
import router from "./router.js";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap";

import BootstrapVue from "bootstrap-vue";
import FlashMessage from "@smartweb/vue-flash-message";

Vue.use(BootstrapVue);
Vue.use(FlashMessage);

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

Vue.component('font-awesome-icon', FontAwesomeIcon)

import VueSidebarMenu from 'vue-sidebar-menu'

Vue.use(VueSidebarMenu)

import "/public/css/style.css";


const app = new Vue({
    el: '#app',
    router,
    render: h => h(App),
});
