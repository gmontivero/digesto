<script setup>
import NavLink from '@/Components/NavLink.vue';
import moment from "moment";

const  vmoment = moment;

defineProps({
    noticia: {
        type : Object,
        required : true
    }
})

</script>
<template>
    <div class="flex flex-col items-center  mt-3">
        <div class="bg-white rounded-lg shadow-lg ">
            <img :src="'storage/'+noticia.foto" alt="Mountain" class="">
            <div class="p-6">
                <span class="w-full text-gray-600 text-right -mb-1">{{ vmoment(noticia.fecha).format("DD/MM/YYYY") }}</span>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">
                    {{ noticia.titulo }}
                </h2>
                <p class="text-gray-700 leading-tight mb-4">
                    {{ noticia.encabezado }}
                </p>
                <p>
                    {{ noticia.cuerpo }}
                </p>
                <div class="w-full text-right">
                    <span class="text-gray-600  hover:cursor-pointer ">
                        <NavLink :href="route('noticias')">
                        Volver
                        </NavLink>
                    </span>
                </div>

            </div>
        </div>
    </div>
</template>
