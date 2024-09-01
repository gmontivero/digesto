<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';
import CardInfo from '@/Components/CardInfo.vue';
import TarjetaNoticiaT from '@/Components/TarjetaNoticiaT.vue';
import CardContact from '@/Components/CardContact.vue';

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
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
               <h2 class="text-2xl font-serif mt-5 mb-1 font-extrabold">Ultimas Noticias</h2>
               <div class="space-x-8 justify-center grid lg:grid-cols-2 lg:gap-2 sm:grid-cols-1 sm:gap-1">
                    <TarjetaNoticiaT v-for="noticia in noticias" :key="noticia.id" :noticia="noticia"/>
               </div>
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <CardInfo/>
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <CardContact/>
            </div>
        </div>
    </Home>
</template>
