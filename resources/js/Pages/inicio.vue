<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';
import CardInfo from '@/Components/CardInfo.vue';
import TarjetaNoticiaT from '@/Components/TarjetaNoticiaT.vue';
import CardContact from '@/Components/CardContact.vue';
</script>

<template>
    <Home>
        <div class="py-2">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <CarruselImage/>
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
               <h2 class="text-2xl font-serif mt-5 mb-1 font-extrabold">Ultimas Noticias</h2>
               <div class="flex space-x-8 justify-center">
                    <TarjetaNoticiaT>

                    </TarjetaNoticiaT>
                    <TarjetaNoticiaT>

                    </TarjetaNoticiaT>
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
