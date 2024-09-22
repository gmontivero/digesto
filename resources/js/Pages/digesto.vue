<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';
import ListadoTabla from '@/Components/ListadoTabla.vue';

const props = defineProps({
    digestos : {
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
            <div class="max-w-5xl mx-auto mt-10">
                <ListadoTabla :digestos="digestos"/>
            </div>
        </div>
    </Home>
</template>
