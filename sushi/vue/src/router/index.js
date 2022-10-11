import { createRouter,createWebHistory } from "vue-router";
import Layout from '../components/Layout.vue'
import AuthLayout from '../components/AuthLayout.vue'
import Login from '../views/Login.vue';
import Dashboard from '../views/Dashboard.vue';
import Stores from '../views/Stores.vue';
import Registeration from '../views/Registeration.vue';
import store from "../store";

const routes = [
    {
        path: '/',
        redirect: '/dashboard',
        meta: {requiresAuth: true},
        component: Layout,
        children: [
            {
                path: '/dashboard',name: 'dashboard', component: Dashboard
            },
            {
                path: '/stores',name: 'stores', component: Stores
            }
        ]
    },
    {
        path: '/auth',
        redirect: '/login',
        component: AuthLayout,
        children: [
            {
                path: '/login',
                name: 'login',
                component: Login
            },
            {
                path: '/registeration',
                name: 'registeration',
                component: Registeration
            }
        ]
    }
    
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

router.beforeEach((to, from, next) => {
    if(to.meta.requiresAuth && !store.state.user.token){
        next({name: 'login'})
    }else if(store.state.user.token && (to.name == 'login' || to.name == 'registeration')){
        next({name: 'dashboard'})
    }
    else{
        next()
    }
})

export default router