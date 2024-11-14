<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import AutoridadForm from '@/Components/Autoridades/Form.vue';
import { router } from '@inertiajs/vue3'


const props = defineProps({
    cargos : {
        type : Object,
        required : true
    },
    autoridad : {
        type : Object,
        required : true
    }
});

const form = useForm({
    'nombre' : props.autoridad.nombre,
    'info' : props.autoridad.info,
    'email' : props.autoridad.email,
    'facebook' : props.autoridad.facebook,
    'instagram' : props.autoridad.instagram,
    'twitter' : props.autoridad.twitter,
    'cargo_id' : props.autoridad.cargo_id,
    'imagen' : props.autoridad.imagen
});

const envio = (id) => {

    router.post(`/autoridad/${id}`, {_method: 'put',
    imagen: form.imagen,
    nombre: form.nombre,
    info: form.info,
    email: form.email,
    facebook: form.facebook,
    instagram: form.instagram,
    twitter: form.twitter,
    cargo_id: form.cargo_id
})
}



</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-600 leading-tight">Editar Autoridad</h1>
        </template>
        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <AutoridadForm :form="form" :cargos="cargos" :updating="true" @submit="envio(autoridad.id)" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
