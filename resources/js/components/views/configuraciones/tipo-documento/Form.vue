<template>
    <form id="form-tipo" ref="basico">
        <div class="row">
            <div class="input-field col s4">
                <input type="text" id="tipo" v-model="form.tipo" />
                <label for="tipo">Tipo</label>
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
    export default {
        props:['form'],
        setup() {

        },
    }
</script>
