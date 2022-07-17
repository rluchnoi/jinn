import vueRouter from 'vue-router'
import Vue from 'vue'

Vue.use(vueRouter);

import Index from './views/Index'
import Casino from './views/Casino'
import Trade from './views/Trade'
import Bet from './views/Bet'


const routes = [
    {
        path: '/',
        component: Index
    },
    {
        path: '/casino',
        component: Casino
    },
    {
        path: '/bet',
        component: Bet,
    },
    {
        path: '/trade',
        component: Trade
    }
]

export default new vueRouter({
    mode: 'history',
    routes,
})