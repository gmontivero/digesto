<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';
import CardInfo from '@/Components/CardInfo.vue';
import TarjetaNoticiaT from '@/Components/TarjetaNoticiaT.vue';
import CardContact from '@/Components/CardContact.vue';

const noticias = [
    {
        id : 1,
        titulo: 'dafdf',
        encabezado: 'daaaaaaa',
        cuerpo:'ddddddddd',
        imagen:'noticia55.jpg'
    },
    {
        id : 1,
        titulo: 'dafdf',
        encabezado: 'daaaaaaa',
        cuerpo:'ddddddddd',
        imagen:'noticia55.jpg'
    },
    {
        id : 1,
        titulo: 'dafdf',
        encabezado: 'daaaaaaa',
        cuerpo:'ddddddddd',
        imagen:'noticia55.jpg'
    },
    {
        id : 1,
        titulo: 'dafdf',
        encabezado: 'daaaaaaa',
        cuerpo:'ddddddddd',
        imagen:'noticia55.jpg'
    },
    {
        id : 1,
        titulo: 'dafdf',
        encabezado: 'daaaaaaa',
        cuerpo:'ddddddddd',
        imagen:'noticia55.jpg'
    },
];
</script>

<template>
    <Home>
        <div class="py-2">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <CarruselImage/>
            </div>
            <div class="max-w-6xl mx-auto ">
                <div class="grid grid-cols-3 gap-3 ">
                    <div v-for="noticia in noticias" :key="noticia.id">
                        <TarjetaNoticiaT/>
                    </div>
                </div>
            </div>
        </div>
    </Home>
</template>
