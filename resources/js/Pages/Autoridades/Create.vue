<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import AutoridadForm from '@/Components/Autoridades/Form.vue';
const form = useForm({
    'nombre' : '',
    'info' : '',
    'email' : '',
    'facebook' : '',
    'instagram' : '',
    'twitter' : '',
    'cargo_id':null,
    'imagen' : null
});

const props = defineProps({
    cargos : {
        type : Object,
        required : true
    }
})

</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-600 leading-tight">Crear Autoridad</h1>
        </template>
        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <AutoridadForm :form="form" :cargos="cargos" @submit="form.post(route('autoridad.store'))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
