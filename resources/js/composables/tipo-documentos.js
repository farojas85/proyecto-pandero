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
    }

    const obtenerTipoDocumento = async(id) => {
        let respuesta = await axios.get('/api/tipo-documentos/'+ id)
        tipoDocumento.value = respuesta.data.data
    }

    return {
        tipoDocumentos, tipoDocumento, obtenerTipoDocumentos, obtenerTipoDocumento
    }
}
