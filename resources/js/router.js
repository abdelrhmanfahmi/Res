import Vue from "vue";
import Router from "vue-router";
import VueScrollTo from 'vue-scrollto';
import Home from "./views/Home.vue";
import Investment from "./views/Investment.vue";
import Opportunities from "./views/Opportunities.vue";
import Login from "./views/Login.vue";
import Register from "./views/Register.vue";
import Reset1 from "./views/Reset1.vue";
import Reset2 from "./views/Reset2.vue";
import Reset3 from "./views/Reset3.vue";
import Reset4 from "./views/Reset4.vue";
import FAQ from "./views/FAQ.vue";
import Terms from "./views/Terms.vue";
import Privacy from "./views/Privacy.vue";
import About from "./views/About.vue";
import Profile from "./views/Profile.vue";
import Favourite from "./views/Favourite.vue";
import Features from "./views/Features.vue";
import Notification from "./views/Notification.vue";
import Support from "./views/Support.vue";
import Setting from "./views/Setting.vue";
import Documents from "./views/Documents.vue";
import Referral from "./views/Referral.vue";
import Wallet from "./views/Wallet.vue";
import ViewDocument from "./views/ViewDocument.vue";
import Invest from "./views/Invest.vue";

Vue.use(Router);

const routes = [
    {
        name:"Home",
        path:"/",
        component:Home
    },
    {
        name:"Investment",
        path:"/investment",
        component:Investment
    },
    {
        name:"Opportunities",
        path:"/opportunities",
        component:Opportunities
    },
    {
        name:"Features",
        path:"/features",
        component:Features
    },
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
    },
    {
        name:"FAQ",
        path:"/faq",
        component:FAQ
    },
    {
        name:"Terms",
        path:"/terms",
        component:Terms
    },
    {
        name:"Privacy",
        path:"/privacy",
        component:Privacy
    },
    {
        name:"About",
        path:"/about",
        component:About
    },
    {
        name:"Profile",
        path:"/profile",
        component:Profile
    },
    {
        name:"Favourite",
        path:"/favourite",
        component:Favourite
    },
    {
        name:"Notification",
        path:"/notifications",
        component:Notification
    },
    {
        name:"Support",
        path:"/support",
        component:Support
    },
    {
        name:"Setting",
        path:"/setting",
        component:Setting
    },
    {
        name:"Documents",
        path:"/documents",
        component:Documents
    },
    {
        name:"Referral",
        path:"/referral",
        component:Referral
    },
    {
        name:"Wallet",
        path:"/wallet",
        component:Wallet
    },
    {
        name:"ViewDocument",
        path:"/document/:id",
        component:ViewDocument
    },
    {
        name:"Invest",
        path:"/invest",
        component:Invest
    }
];

const router = new Router({
    mode:"hash",
    hashbang:false,
    routes:routes,
    scrollBehavior: function (to) {
        if (to.hash) {
            VueScrollTo.scrollTo(to.hash, 700);
            return {
            selector: to.hash
            }
        }else{
            return {x: 0, y: 0}
        }
    },
    linkActiveClass:"active"
});

export default router;