import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import Item from './pages/Item';
import CheckOut from './pages/CheckOut';
import RestaurantMenu from './pages/RestaurantMenu';

const router = new VueRouter({
    mode: "history",

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/',
            name: 'item',
            component: Item
        },
        {
            path: '/',
            name: 'checkout',
            component: CheckOut
        },
        {
            path: '/',
            name: 'restaurant-menu',
            component: RestaurantMenu
        },
        
    
    ]
});

export default router