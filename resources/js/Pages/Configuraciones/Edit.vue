<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import ConfiguracionForm from '@/Components/Configuraciones/Form.vue';

const props = defineProps({
    configuracion : {
        type : Object,
        required : true
    }
});

const form = useForm({
    'imagen' : null,
    'nombre': '12313213'
});
</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-600 leading-tight">Editar Imagen de Inicio</h1>
        </template>
        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <ConfiguracionForm :form="form" :updating="true" @submit="form.put(route('configuracion.update', configuracion.id))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
