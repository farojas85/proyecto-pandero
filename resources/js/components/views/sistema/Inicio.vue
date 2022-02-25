<template>
    <content-header-sub :titleCard="titleCard" :titleSub="titleSub" :titlePrincipal="titlePrincipal"></content-header-sub>
    <div class="section">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col m12 s12 l12 xl12">
                        <button class="btn mb-1 waves-effect waves-light blue mr-1"
                            type="button" name="action" @click="cambiarModelo('Usuarios')">
                            Usuarios<i class="material-icons left">people</i>
                        </button>
                        <button class="btn mb-1 waves-effect waves-light blue mr-1"
                            type="button" name="action" @click="cambiarModelo('Roles')">
                            Roles<i class="material-icons left">person_pin</i>
                        </button>
                        <button class="btn mb-1 waves-effect waves-light blue mr-1"
                            type="button" name="action" @click="cambiarModelo('Roles / Usuarios')">
                            Roles / Usuarios
                            <i class="material-icons left">record_voice_over</i>
                        </button>
                        <button class="btn mb-1 waves-effect waves-light blue mr-1"
                            type="button" name="action" @click="cambiarModelo('Permisos')">
                            Permisos
                            <i class="material-icons left">security</i>
                        </button>
                        <button class="btn mb-1 waves-effect waves-light blue mr-1"
                            type="button" name="action" @click="cambiarModelo('Permisos / Roles')">
                            Permisos / Roles
                            <i class="material-icons left">perm_contact_calendar</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12 xl12" id="contenido-modelos">
                <usuarios-view v-if="modeloActual=='Usuarios'"></usuarios-view>
                <roles-view v-else-if="modeloActual=='Roles'"></roles-view>
                <role-usuario-view v-else-if="modeloActual=='Roles / Usuarios'"></role-usuario-view>
                <permisos-view v-else-if="modeloActual=='Permisos'"></permisos-view>
                <permiso-role-view v-else-if="modeloActual=='Permisos / Roles'"></permiso-role-view>
            </div>
        </div>
    </div>
</template>

<script>
    import {ref, onMounted } from 'vue'
    import { useRoute } from 'vue-router'

    import ContentHeaderSub from '../../partials/ContendHeaderSubs.vue'
    import UsuariosView from './usuario/Inicio.vue'
    import RolesView from './role/Inicio.vue'
    import RoleUsuarioView from './role-usuario/Inicio.vue'
    import PermisosView from './permiso/Inicio.vue'
    import PermisoRoleView from './permiso-role/Inicio.vue'

    export default {
        components:{
            ContentHeaderSub, UsuariosView, RolesView, RoleUsuarioView,
            PermisosView, PermisoRoleView
        },
        setup() {
            const ruta = useRoute()

            const modeloActual = ref('Usuarios')

            const titleCard = ref('Configuración Usuarios')

            const titlePrincipal = ref(ruta.name)

            const titleSub = ref(modeloActual)

            const cambiarModelo = (modelo) => {
                modeloActual.value = modelo
                titleCard.value = "Configuración " + modelo
                titleSub.value = modelo
            }

            return {
                modeloActual, titleCard, titlePrincipal,
                titleSub, ruta, cambiarModelo
            }
        }
    }
</script>
