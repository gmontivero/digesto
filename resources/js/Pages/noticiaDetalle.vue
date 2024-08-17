<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';
import TarjetaNoticiaTDetalle from '@/Components/TarjetaNoticiaTDetalle.vue';

</script>

<template>
    <Home>
        <div class="py-2">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <CarruselImage/>
            </div>
            <div class="max-w-6xl mx-auto ">
                <TarjetaNoticiaTDetalle/>
            </div>
        </div>
    </Home>
</template>
