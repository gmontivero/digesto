<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';
import CardInfo from '@/Components/CardInfo.vue';
import fotoperfil from '@/Components/fotoperfil.vue';

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
            <div class="max-w-6xl mx-auto ">
                <div class="grid grid-cols-3 gap-3 ">
                    <div v-for="autoridad in autoridades" :key="autoridad.id">
                        <fotoperfil :src="'storage/'+autoridad.imagen" :info="autoridad.info" :name="autoridad.nombre" :cargo="autoridad.cargo.nombre" :instagram="autoridad.instagram" :email="autoridad.email" :facebook="autoridad.facebook" :twitter="autoridad.twitter"/>
                    </div>
                </div>
            </div>
        </div>
    </Home>
</template>
