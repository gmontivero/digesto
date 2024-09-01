<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';
import TarjetaNoticiaT from '@/Components/TarjetaNoticiaT.vue';


defineProps({
    noticias: {
        type : Object,
        required : true
    }
})

</script>

<template>
    <Home>
        <div class="py-2">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <CarruselImage/>
            </div>
            <div class="max-w-6xl mx-auto ">
                <div class="grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2 sm:gap-2">
                    <TarjetaNoticiaT v-for="noticia in noticias" :key="noticia.id" :noticia="noticia"/>
                </div>
            </div>
        </div>
    </Home>
</template>
