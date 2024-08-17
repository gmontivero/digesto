<template>
        <v-card class="max-h-full lg:max-w-full md:max-w-max ">
            <v-carousel  height="400">
                <v-carousel-item v-for="(imagen, index) in imagenes" :key="index" :src="imagen.src"
                 cover >
                </v-carousel-item>
            </v-carousel>
        </v-card>

  </template>

  <script setup>

const imagenes = [
    {src: "/img/diajovenes.jpg"},
    {src: "/img/diainfancia24.jpg"},
    {src: "/img/licenciaconducir.jpg"},
]
  </script>
