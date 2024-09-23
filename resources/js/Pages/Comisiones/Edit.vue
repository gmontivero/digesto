<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import ComisionForm from '@/Components/Comisiones/Form.vue';

const props = defineProps({
    comision : {
        type : Object,
        required : true
    },
    autoridades : {
        type : Object,
        required : true
    },
    autoridades_comisiones : {
        type : Object,
        required : true
    }
})

const form = useForm({
    nombre : props.comision.nombre
})
</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-600 leading-tight">Editar Comision</h1>
        </template>
        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <ComisionForm :form="form" :autoridades="autoridades" :autoridades_comisiones="autoridades_comisiones" :updating="true" @submit="form.put(route('comision.update', comision.id))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
