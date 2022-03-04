<template>
    <form id="form-tipo" @submit.prevent="save" >
        <div class="row">
            <div class="input-field col s4">
                <input type="text" id="tipo" data-error=".errorTipo" v-model="form.tipo" />
                <label for="tipo">Tipo</label>
                <!-- <small class="errorTipo" v-if="form.errors.has('tipo')">
                    <div id="tipo-error" class="error">{{ }}</div>
                </small> -->
                <HasError class="red-text" :form="form" field="tipo" />
            </div>
            <div class="input-field col s8">
                <input type="text" id="nombre_corto" v-model="form.nombre_corto" />
                <label for="nombre-corto">Nombre Corto</label>
                <HasError class="red-text" :form="form" field="nombre_corto" />
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" id="nombre_largo" v-model="form.nombre_largo" />
                <label for="nombre-largo">Nombre Largo</label>
                <HasError class="red-text" :form="form" field="nombre_largo" />
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input type="number" id="nlongitud" v-model="form.longitud"  />
                <label for="nlongitud">Longitud</label>
                <HasError class="red-text" :form="form" field="longitud" />
            </div>
            <div class="col s3">

            </div>
            <div class="input-field col s3">
                <span>Estado</span>
                <div class="switch right">
                    <label>
                        <input type="checkbox" v-model="form.estado" />
                        <span class="lever"></span>

                    </label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close  btn waves-effect waves-light invoice-export red border-round z-depth-4 ">Cancelar</a>
            <button type="submit"
                class="btn waves-effect waves-light invoice-export green border-round z-depth-4 ml-2">
                Guardar
            </button>
        </div>
    </form>
</template>

<script>
    import { HasError } from 'vform/src/components/bootstrap5'
    import useTipoDocumentos from '../../../../composables/tipo-documentos'
    import { onMounted, reactive, toRefs } from 'vue'
    import Form from 'vform'
    export default {
        props:{
            estadoCrud: String
        },
        components:{
            HasError
        },
        setup(props,context) {
            const { errors, storeTipoDocumento, obtenerTipoDocumentos } = useTipoDocumentos()

            const { estadoCrud,getTipo } = toRefs(props)

            const initialState =  new Form({
                id:'',
                tipo:'',
                nombre_corto:'',
                nombre_largo:'',
                longitud:'',
                estado:true,
                estadoCrud:estadoCrud
            })
            const form = reactive(initialState)

            const save = () => {
                if(form.estadoCrud == 'nuevo') {
                    saveTipoDocumento()
                    $('#modal-form').modal('close')
                }
            }
            const saveTipoDocumento = async () => {
                let respuesta = await storeTipoDocumento(form)
            }

            return {
                form, errors,save, saveTipoDocumento
            }
        },

    }
</script>
