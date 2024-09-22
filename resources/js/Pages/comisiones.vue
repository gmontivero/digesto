<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';
import comisionmiembro from '@/Components/comisionmiembro.vue';

defineProps({
    autoridades: {
        type : Object,
        required : true
    },
    imagenes:{
        type : Object,
    }
})
</script>

<template>
    <Home>
        <div class="py-2">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <CarruselImage :imagenes="imagenes"/>
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <section id="our-team" class="bg-gray-100 py-32">
                    <div class="container mx-auto px-4">
                        <h2 class="text-3xl font-bold text-center mb-8 text-primary">Comisión de Legislación General</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                            <div v-for="autoridad in autoridades" :key="autoridad.id">
                                <comisionmiembro :src="'storage/'+autoridad.imagen" :name="autoridad.nombre" :cargo="autoridad.cargo.nombre"/>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </Home>
</template>
