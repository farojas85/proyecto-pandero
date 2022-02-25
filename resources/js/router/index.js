import { createRouter, createWebHistory } from "vue-router";

import Dashboard from '../components/views/Dashboard';
import Sistema from '../components/views/sistema/Inicio';
const routes = [
    { path: '/dashboard', name:'Dashboard 1', component: Dashboard},
    { path: '/sistema', name:'Sistema', component: Sistema}
]

export default createRouter({
    history: createWebHistory(),
    routes
})
