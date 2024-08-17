<script setup>
import NavLink from '@/Components/NavLink.vue';
</script>

<template>
    <div class="flex flex-col items-center  mt-3">
        <span class="w-full text-gray-600 text-right -mb-1">20/08/2024</span>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-lg w-full">
            <img src="/img/noticia56.jpeg" alt="Mountain" class="">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">
                    Analizan anteproyecto de ley para abordar el problema de las apuestas online en menores
                </h2>
                <p class="text-gray-700 leading-tight mb-4">
                    En el marco de una creciente preocupación por el aumento de casos de ludopatía en niños, niñas y adolescentes, se concretó una importante reunión en la Legislatura Provincial para analizar, legislar y prevenir sobre esta problemática.
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">

                    </div>
                    <span class="text-gray-600 underline hover:cursor-pointer">
                        <NavLink :href="route('noticiadetalle')">
                        Ver
                        </NavLink>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>
