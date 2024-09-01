<script setup>
import { ref, watch } from 'vue'
import { Link } from '@inertiajs/vue3';
import moment from "moment";
const  vmoment = moment;

let buscar = ref('')

const props = defineProps({
    digestos : {
        type : Object,
        required : true
    }
})


</script>

<template>
<div class="text-gray-900 font-mono">
    <div class="p-4 flex">
        <div class="p-1 rounded-lg">
            <div class="relative bg-inherit">
                <input type="text" id="buscar" name="buscar" v-model="buscar"  class="sm:w-16 md:w-16 lg:w-72 peer bg-transparent h-10  rounded-lg text-gray-200 placeholder-transparent ring-2 px-2 ring-gray-500 focus:ring-sky-600 focus:outline-none focus:border-rose-600 " placeholder="Buscar aqui"/>
                <label for="buscar" class="absolute cursor-text left-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-5 peer-focus:text-sky-600 peer-focus:text-sm transition-all">Buscar aqui</label>
                <Link href="/digestos" :data="{ buscar }" preserve-state
                class="px-6 ml-6 py-2 min-w-[120px] text-center text-sky-500 border-2 border-sky-600 rounded hover:bg-sky-300 hover:text-white active:bg-indigo-500 focus:outline-none focus:ring">
                Buscar</Link>
            </div>

        </div>

    </div>
    <div class="px-3 py-4 justify-center overflow-auto">
        <table class="table-auto  bg-white shadow-md rounded mb-4 border-collapse lg:w-full text-md md:w-fit text-md sm:w-4/5 text-sm">
            <tbody>
                <tr class="border-b bg-sky-300">
                    <th class="text-left p-3 px-5">Número</th>
                    <th class="text-left p-3 px-5 sm:w-1/5">Titulo</th>
                    <th class="text-left p-3 px-5">Resumen</th>
                    <th class="text-left p-3 px-5">Fecha</th>
                    <th class="text-left p-3 px-5">PDF</th>
                </tr>
                <tr v-for="digesto in digestos.data" :key="digesto.id" class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">
                        {{ digesto.numero }}
                    </td>
                    <td class="p-3 px-5">
                        {{ digesto.titulo }}
                    </td>
                    <td class="p-3 px-5">
                        {{ digesto.resumen }}
                    </td>
                    <td class="p-3 px-5">
                        {{  vmoment(digesto.fecha).format("DD/MM/YYYY") }}
                    </td>
                    <td class="p-3 px-5">
                       <a :href="'storage/'+digesto.pdf" target="_blank">PDF</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

</template>

