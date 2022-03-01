import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

export default function useTipoDocumentos() {
    const tipoDocumentos = ref([])
    const tipoDocumento = ref({})
    const router = useRouter()
    const errors = ref('')

    const obtenerTipoDocumentos = async() => {
        let respuesta = await axios.get('/api/tipo-documentos')
        tipoDocumentos.value = respuesta.data.data
        //return respuesta.data.data
    }

    const obtenerTipoDocumento = async(id) => {
        let respuesta = await axios.get('/api/tipo-documentos/'+ id)
        tipoDocumento.value = respuesta.data.data
    }

    const storeTipoDocumento =async(form) => {
        errors.value=''
        try
        {
            await form.post('api/tipo-documentos')
            form.clear()
            form.reset()
        } catch(e) {
            if(e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }

    }

    return {
        errors, tipoDocumentos, tipoDocumento,
        obtenerTipoDocumentos, obtenerTipoDocumento,
        storeTipoDocumento
    }
}
