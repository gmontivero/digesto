<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';

</script>

<template>
    <Home>
        <div class="py-2">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <CarruselImage/>
            </div>
            <div class="max-w-3xl mx-auto ">
                <main class="flex-grow p-5">
                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-1">
                        <div class="bg-blue-200 p-4 col-span-2">Hoteles   </div>
                        <div class="bg-gray-100 p-4">Hotel del Centro   </div>
                        <div class="bg-gray-100 p-4">911</div>
                        <div class="bg-gray-100 p-4">Hotel san nicolas</div>
                        <div class="bg-gray-100 p-4">911</div>
                        <div class="bg-gray-100 p-4">Hospedaje san pedro</div>
                        <div class="bg-gray-100 p-4">911</div>

                        <div class="bg-blue-200 p-4 col-span-2">Restaurantes   </div>
                        <div class="bg-gray-100 p-4">Restaurante 1 </div>
                        <div class="bg-gray-100 p-4">911</div>
                        <div class="bg-gray-100 p-4">Restaurante 1</div>
                        <div class="bg-gray-100 p-4">911</div>
                        <div class="bg-gray-100 p-4">Restaurante 1</div>
                        <div class="bg-gray-100 p-4">911</div>

                    </div>
                </main>
            </div>
        </div>
    </Home>
</template>
