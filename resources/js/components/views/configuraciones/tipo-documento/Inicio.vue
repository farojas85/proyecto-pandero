<template>
    <content-header-sub :titleCard="titleCard" :titleSub="titleSub"
        :titlePrincipal="titlePrincipal"></content-header-sub>
    <h4 class="card-title">
        Listado Tipo Documentos
    </h4>
    <section class="invoice-list-wrapper section">
        <div class="invoice-filter-action mr-3">
            <a href="#" class="btn waves-effect waves-light invoice-export red border-round z-depth-4">
                <i class="material-icons">picture_as_pdf</i>
                <span class="hide-on-small-only">Export to PDF</span>
            </a>
        </div>
        <div class="invoice-create-btn">
            <button type="button"  class="btn waves-effect waves-light green invoice-create border-round z-depth-4"
               @click="nuevo">
                <i class="material-icons">add</i>
                <span class="hide-on-small-only">Nuevo Tipo Documento</span>
            </button>
        </div>
        <div class="filter-btn">
            <!-- Dropdown Trigger -->
            <a class='dropdown-trigger btn waves-effect waves-light purple darken-1 border-round' href='#'
            data-target='btn-filter'>
                <span class="hide-on-small-only">Filtrar</span>
                <i class="material-icons">keyboard_arrow_down</i>
            </a>
            <!-- Dropdown Structure -->
            <ul id='btn-filter' class='dropdown-content'>
                <li><a href="#!">Paid</a></li>
                <li><a href="#!">Unpaid</a></li>
                <li><a href="#!">Partial Payment</a></li>
            </ul>
        </div>
        <div class="responsive-table">
            <table class="table invoice-data-table white border-radius-4 pt-1">
                <thead>
                    <tr>
                        <!-- data table responsive icons -->
                        <th></th>
                        <!-- data table checkbox -->
                        <th></th>
                        <th>
                            <span>#</span>
                        </th>
                        <th>Tipo</th>
                        <th>Nombre Corto</th>
                        <th>Nombre Largo</th>
                        <th>Longitud</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="tipo in tipoDocumentos" :key="tipo.id">
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#">{{  tipo.id }}</a>
                        </td>
                        <td><span class="invoice-customer centered">{{ tipo.tipo }}</span></td>
                        <td><span class="invoice-customer">{{ tipo.nombre_corto }}</span></td>
                        <td><span class="invoice-customer">{{ tipo.nombre_largo }}</span></td>
                        <td>
                            {{ tipo.longitud }}
                        </td>
                        <td>
                            <span v-if="tipo.estado" class="chip lighten-5 green green-text">Activo</span>
                            <span v-else class="chip lighten-5 red red-text">Inactivo</span>
                        </td>
                        <td>
                            <div class="invoice-action">
                                <a href="app-invoice-view.html" class="invoice-action-view mr-4">
                                    <i class="material-icons blue-text">remove_red_eye</i>
                                </a>
                                <a href="app-invoice-edit.html" class="invoice-action-edit">
                                    <i class="material-icons orange-text">edit</i>
                                </a>
                                 <a href="app-invoice-edit.html" class="invoice-action-delete">
                                    <i class="material-icons red-text">delete</i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <div id="modal-form" class="modal">
        <div class="modal-content">
            <h4 id="modal-title">Modal Header</h4>
            <div id="modal-body">
                <tipo-form :estadoCrud="estadoCrud"  ></tipo-form>
            </div>
        </div>
    </div>
</template>
<script>
    import { ref, onMounted} from 'vue'
    import { useRoute } from 'vue-router'
    import helper from '../../../helpers'
    import ContendHeaderSub from '../../../../components/partials/ContendHeaderSubs.vue'
    import useTipoDocumentos from '../../../../composables/tipo-documentos'
    import TipoForm from './Form.vue'

    export default {
        components:{
            ContendHeaderSub,
            TipoForm
        },
        mounted(){
            helper.addChildStyle('vendors/data-tables/js/jquery.dataTables.min.js','#vendor-styles')
            helper.addChildStyle(
                'vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css',
                '#vendor-styles')
            helper.addChildStyle('endors/data-tables/css/dataTables.checkboxes.min.css')
            helper.addChildStyle('css/pages/app-invoice.min.css','#page-styles')

            helper.addChildScript(
                'vendors/data-tables/js/jquery.dataTables.min.js','#vendor-scripts')
            helper.addChildScript(
                'vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js',
                '#vendor-scripts')
            helper.addChildScript('vendors/data-tables/js/datatables.checkboxes.min.js','#vendor-scripts')
            helper.addChildScript('js/scripts/app-invoice.js','#page-scripts')
            helper.addChildScript('js/scripts/advance-ui-modals.js','#page-scripts')

            document.body.classList.add("app-page")
            helper.defineTitle('Tipo Documentos')
            //this.obtenerTipoDocumentos()
        },
        setup() {
            const {tipoDocumentos, obtenerTipoDocumentos } = useTipoDocumentos()

            const ruta = useRoute()

            const modeloActual = ref('Tipo Documentos')

            const titleCard = ref('Configuración Tipo Documentos')

            const titlePrincipal = ref(ruta.name)

            const titleSub = ref(modeloActual)

            const estadoCrud = 'nuevo'

            onMounted(obtenerTipoDocumentos)

            const nuevo = () => {
                $('.modal').modal();
                $('#modal-title').html('Nuevo Tipo Documento')
                $('#modal-form').modal('open')
            }

            return {
                tipoDocumentos, nuevo,estadoCrud, obtenerTipoDocumentos
            }
        },
    }
</script>
