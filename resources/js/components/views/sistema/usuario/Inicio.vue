<template>
    <div class="card">
        <div class="card-content">
            <h4 class="card-title">
                Listado Usuarios
            </h4>
            <div class="row">
                <div class="col s12 m12 l12 xl12">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 m12 l12 xl12 table-responsive">
                                     <table id="scroll-vert-hor" class="table invoice-data-table white border-radius-4 pt-1 dataTable no-footer dtr-column">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Usuario</th>
                                                <th>Correo</th>
                                                <th>Estado</th>
                                                <th>Operaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                     </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import helper from '../../../helpers'
    import { obtenerUsuarios} from '../../../../composables/usuarios'
    import { onMounted } from 'vue'

    export default {
        data() {
            return {
                show_usuarios:'habilitados',
                usuarios:[],
                total:0,
                form: new form({
                    id:'',
                    name:'',
                    email:'',
                    password:''
                }),
                paginacion:5,
                buscar:''
            }
        },
        mounted(){
            helper.defineTitle('Usuarios')
        },
        created(){
            this.listarUsuarios()
        },
        methods:{
            listarUsuarios(page=1){
                this.usuarios = obtenerUsuarios(page,this.paginacion,this.show_usuarios,page,this.buscar,this.buscar)
                this.total = usuarios.data.total;
                console.log(this.usuarios)
            },
            habilitados() {
                this.show_usuarios="habilitados";
                this.listarUsuarios()
            }
        }

    }
</script>
