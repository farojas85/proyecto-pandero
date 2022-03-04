import { createRouter, createWebHistory } from "vue-router";

import Dashboard from '../components/views/Dashboard';
import Sistema from '../components/views/sistema/Inicio';
import Configuracion from '../components/views/configuraciones/Inicio'
import TipoDocumento from '../components/views/configuraciones/tipo-documento/Inicio.vue'

const routes = [
    { path: '/dashboard', name:'Dashboard 1', component: Dashboard},
    { path: '/sistema', name:'Sistema', component: Sistema},
    { path: '/configuracion', name: 'Configuracion', component: Configuracion},
    { path: '/tipo-documentos', name: 'TipoDocumentos', component: TipoDocumento}
]

export default createRouter({
    history: createWebHistory(),
    routes
})
