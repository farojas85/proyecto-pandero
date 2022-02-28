<template>
     <div v-if="errors">
        <div v-for="(v, k) in errors" :key="k"
            class="bg-red-500 text-white rounded font-bold mb-4 shadow-lg py-2 px-4 pr-0">
            <p v-for="error in v" :key="error" class="text-sm">
            {{ error }}
            </p>
        </div>
    </div>
    <form id="form-tipo" >
        <div class="row">
            <div class="input-field col s4">
                <input type="text" id="tipo" data-error=".errorTipo" v-model="form.tipo" />
                <label for="tipo">Tipo</label>
                <!-- <small class="errorTipo" v-if="form.errors.has('tipo')">
                    <div id="tipo-error" class="error">{{ }}</div>
                </small> -->
                 <!-- <HasError  :form="form" field="tipo" /> -->
            </div>
            <div class="input-field col s8">
                <input type="text" id="nombre-corto" v-model="form.nombreCorto" />
                <label for="nombre-corto">Nombre Corto</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" id="nombre-largo" v-model="form.nombreLargo" />
                <label for="nombre-largo">Nombre Largo</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input type="number" id="nlongitud" v-model="form.longitud"  />
                <label for="nlongitud">Longitud</label>
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
            <a href="#!" class="btn waves-effect waves-light invoice-export green border-round z-depth-4 ml-2">Guardar</a>
        </div>
    </form>
</template>

<script>
    // import { HasError } from 'vform/src/components/bootstrap5'
    import useTipoDocumentos from '../../../../composables/tipo-documentos'
    import { toRefs } from 'vue'
    export default {
        props:['form'],
        setup(props) {
            const { form } = toRefs(props)
            const { errors, storeTipoDocumento } = useTipoDocumentos()

            const save = () => {
                if(form) {

                }
            }
            const saveTipoDocumento = async () => {
                await storeTipoDocumento(form)
            }

            return {
                form, errors, saveTipoDocumento
            }
        },

    }
</script>
