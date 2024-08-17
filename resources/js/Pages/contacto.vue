<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';
import CardContact from '@/Components/CardContact.vue';

</script>

<template>
    <Home>
        <div class="py-2">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <CarruselImage/>
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <CardContact/>
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white px-6 py-2 sm:py-32 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Formulario de Contacto</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">Esperamos tu mensaje!!.</p>
                    </div>
                    <form  class="mx-auto mt-16 max-w-xl sm:mt-20">
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div class="sm:col-span-2">
                                <label for="motivo" class="block text-sm font-semibold leading-6 text-gray-900">Motivo</label>
                                <div class="mt-2.5">
                                    <select id="motivo" name="motivo" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value="Solicitar Informacion">Solicitar Información</option>
                                        <option value="Acercar Iniciativa">Acercar Iniciativa</option>
                                        <option value="Mensaje a los Consejales">Mensaje a los Consejales</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="nombre" class="block text-sm font-semibold leading-6 text-gray-900">Nombre</label>
                                <div class="mt-2.5">
                                    <input type="text" name="nombre" id="nombre" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div>
                                <label for="apellido" class="block text-sm font-semibold leading-6 text-gray-900">Apellido</label>
                                <div class="mt-2.5">
                                    <input type="text" name="apellido" id="apellido" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                                <div class="mt-2.5">
                                    <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="telefono" class="block text-sm font-semibold text-gray-900">Número de Teléfono</label>
                                <div class="relative mt-2.5">
                                    <input type="tel" name="telefono" id="telefono" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="mensage" class="block text-sm font-semibold leading-6 text-gray-900">Mensaje</label>
                                <div class="mt-2.5">
                                    <textarea name="mensage" id="mensage" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </Home>
</template>
