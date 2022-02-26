import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

export default function useUsuarios() {
    const usuarios = ref([])
    const usuario = ref({})
    const router = useRouter()
    const errors = ref('')

    const obtenerUsuarios = async() => {
        let respuesta = await axios.get('/api/users')
        usuarios.value = respuesta.data.data
    }

    const obtenerUsuario = async(id) => {
        let respuesta = await axios.get('/api/users/'+ id)
        usuario.value = respuesta.data.data
    }

    return {
        usuarios, usuario, obtenerUsuarios, obtenerUsuario
    }
}
