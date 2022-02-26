import { createRouter, createWebHistory } from "vue-router";

import Dashboard from '../components/views/Dashboard';
import Sistema from '../components/views/sistema/Inicio';
import Configuracion from '../components/views/configuraciones/Inicio'

const routes = [
    { path: '/dashboard', name:'Dashboard 1', component: Dashboard},
    { path: '/sistema', name:'Sistema', component: Sistema},
    { path: '/configuracion', name: 'Configuración', component: Configuracion}
]

export default createRouter({
    history: createWebHistory(),
    routes
})
