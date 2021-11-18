import Vue from "vue";
import Router from "vue-router";
import VueScrollTo from 'vue-scrollto';
import Login from "./views/Login.vue";
import Register from "./views/Register.vue";
import Reset1 from "./views/Reset1.vue";
import Reset2 from "./views/Reset2.vue";
import Reset3 from "./views/Reset3.vue";
import Reset4 from "./views/Reset4.vue";

Vue.use(Router);

const routes = [
    {
        name:"Login",
        path:"/login",
        component:Login
    },
    {
        name:"Register",
        path:"/register",
        component:Register
    },
    {
        name:"Reset1",
        path:"/reset/step1",
        component:Reset1
    },
    {
        name:"Reset2",
        path:"/reset/step2",
        component:Reset2
    },
    {
        name:"Reset3",
        path:"/reset/step3",
        component:Reset3
    },
    {
        name:"Reset4",
        path:"/reset/step4",
        component:Reset4
    }
];

const router = new Router({
    mode:"hash",
    hashbang:false,
    routes:routes,
    linkActiveClass:"active"
});

export default router;