<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import AutoridadForm from '@/Components/Autoridades/Form.vue';

const props = defineProps({
    autoridad : {
        type : Object,
        required : true
    },
    cargos : {
        type : Object,
        required : true
    }
})

const form = useForm({
    nombre : props.autoridad.nombre,
    info : props.autoridad.info,
    facebook : props.autoridad.facebook,
    instagram : props.autoridad.instagram,
    twitter : props.autoridad.twitter,
    email : props.autoridad.email,
    cargo_id : props.autoridad.cargo_id,
    imagen : props.autoridad.imagen
})

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
                            <AutoridadForm :form="form" :cargos="cargos" :updating="true" @submit="form.put(route('autoridad.update', autoridad.id))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
