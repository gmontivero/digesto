<script setup>
import NavLink from '@/Components/NavLink.vue';
import { Link } from '@inertiajs/vue3';
import moment from "moment";

const  vmoment = moment;
defineProps({
    noticia: {
        type : Object,
        required : true
    },
})


</script>

<template>
    <div class="flex flex-col items-center  mt-3">
        <span class="w-full text-gray-600 text-right -mb-1 mr-8">{{ vmoment(noticia.fecha).format("DD/MM/YYYY") }}</span>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-lg w-full">
            <img :src="'storage/'+noticia.foto" alt="Mountain" class=""/>
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">
                    {{ noticia.titulo }}
                </h2>
                <p class="text-gray-700 leading-tight mb-4">
                    {{ noticia.encabezado }}
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">

                    </div>
                    <span class="text-gray-600 underline hover:cursor-pointer">
                        <Link href="/noticiadetalle" method="post" :data="{ id: noticia.id }">Ver</Link>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>
