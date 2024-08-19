<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import DigestoForm from '@/Components/Digestos/Form.vue';

const props = defineProps({
    digesto : {
        type : Object,
        required : true
    },
    tipos : {
        type : Object,
        required : true
    }
})

const form = useForm({
    titulo : props.digesto.titulo,
    resumen : props.digesto.resumen,
    numero : props.digesto.numero,
    fecha : props.digesto.fecha,
    tipo_id : props.digesto.tipo_id,
    pdf : props.digesto.pdf
})

</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-600 leading-tight">Editar Digesto</h1>
        </template>
        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <DigestoForm :form="form" :tipos="tipos" :updating="true" @submit="form.put(route('digesto.update', digesto.id))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
