import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

var usuarios = []
var usuario = {}
var errores = []

var obtenerUsuarios = async(page,paginacion,show_usuarios,buscar) => {
    let respuesta = await axios.get(
        'api/usuario-'+show_usuarios+"?page="+page+"&pagina="+paginacion
        +"&buscar="+buscar
    )
    return respuesta.data
}


export {
    usuarios, usuario, obtenerUsuarios
}

// export default useUsuarios = {

//     const obtenerUsuarios{
//         let respuesta = await axios.get('/api/users')
//         return
//     }

//     const obtenerUsuario = async(id) => {
//         let respuesta = await axios.get('/api/users/'+ id)
//         usuario.value = respuesta.data.data
//     }

//     return {
//         usuarios, usuario, obtenerUsuarios, obtenerUsuario
//     }
// }
