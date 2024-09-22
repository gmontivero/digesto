<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CargoForm from '@/Components/Cargos/Form.vue';

const props = defineProps({
    cargo : {
        type : Object,
        required : true
    }
})

const form = useForm({
    nombre : props.cargo.nombre
})
</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-600 leading-tight">Editar Cargo</h1>
        </template>
        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <CargoForm :form="form" :updating="true" @submit="form.put(route('cargo.update', cargo.id))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
