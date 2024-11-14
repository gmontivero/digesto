<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import NoticiaForm from '@/Components/Noticias/Form.vue';
import { router } from '@inertiajs/vue3'
const props = defineProps({
    noticia : {
        type : Object,
        required : true
    }
})

const form = useForm({
    'titulo' : props.noticia.titulo,
    'encabezado' : props.noticia.encabezado,
    'cuerpo' : props.noticia.cuerpo,
    'fecha' : props.noticia.fecha,
    'foto' : props.noticia.foto
})

const envio = (id) => {
    router.post(`/noticia/${id}`, {_method: 'put',
    foto: form.foto,
    titulo: form.titulo,
    encabezado: form.encabezado,
    cuerpo: form.cuerpo,
    fecha: form.fecha
    })
}

</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-600 leading-tight">Editar Noticia</h1>
        </template>
        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <NoticiaForm :form="form" :updating="true" @submit="envio(noticia.id)" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
