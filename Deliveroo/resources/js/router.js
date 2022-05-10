import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App from './views/App';

const router = new VueRouter({
    mode: "history",

    routes: [
        {
            path: '/',
            name: 'home',
            component: App
        },
    ]
});

export default router