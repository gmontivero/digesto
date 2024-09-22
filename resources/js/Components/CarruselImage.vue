<template>
        <v-card class="max-h-full lg:max-w-full md:max-w-max ">
            <v-carousel  height="400">
                <v-carousel-item v-for="imagen in imagenes" :key="imagen.id" :src="'storage/'+imagen.imagen"
                 cover >
                </v-carousel-item>
            </v-carousel>
        </v-card>

  </template>

  <script setup>

defineProps({
    imagenes:{
        type : Object,
    }
})

  </script>
