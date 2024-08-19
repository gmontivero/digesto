<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import DigestoForm from '@/Components/Digestos/Form.vue';
const form = useForm({
    'titulo' : '',
    'resumen' : '',
    'numero' : '',
    'fecha' : '',
    'tipo_id':null,
    'pdf' : null
});

const props = defineProps({
    tipos : {
        type : Object,
        required : true
    }
})

</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-600 leading-tight">Crear Digesto</h1>
        </template>
        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <DigestoForm :form="form" :tipos="tipos" @submit="form.post(route('digesto.store'))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
