<template>
    <content-header-sub :titleCard="titleCard" :titleSub="titleSub"
        :titlePrincipal="titlePrincipal"></content-header-sub>
    <div class="section">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col m12 s12 l12 xl12">
                                <button class="btn mb-1 waves-effect waves-light blue mr-1"
                                    type="button" name="action" @click="cambiarModelo('Tipo Documentos')">
                                    Tipo Documentos<i class="material-icons left">assignment_ind</i>
                                </button>
                                <!-- <button class="btn mb-1 waves-effect waves-light blue mr-1"
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
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12 xl12" id="contenido-modelos">
                 <div class="card">
                    <div class="card-content">
                        <tipo-documento-view v-if="modeloActual=='Tipo Documentos'"></tipo-documento-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {ref, onMounted } from 'vue'
    import { useRoute } from 'vue-router'

    import ContentHeaderSub from '../../partials/ContendHeaderSubs.vue'
    import TipoDocumentoView from './tipo-documento/Inicio.vue'

    export default {
        components:{
            ContentHeaderSub, TipoDocumentoView
        },
        setup() {
            const ruta = useRoute()

            const modeloActual = ref('Tipo Documentos')

            const titleCard = ref('Configuración Tipo Documentos')

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
        },
    }
</script>
