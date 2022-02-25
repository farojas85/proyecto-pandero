import { createRouter, createWebHistory } from "vue-router";

import Dashboard from '../components/views/Dashboard';
import Sistema from '../components/views/sistema/Inicio';
const routes = [
    { path: '/dashboard', name:'dashboard', component: Dashboard},
    { path: '/sistema', name:'sistema.inicio', component: Sistema}
]

export default createRouter({
    history: createWebHistory(),
    routes
})
