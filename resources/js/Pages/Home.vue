<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Menubar from 'primevue/menubar';

defineProps({
    title: String,
});


const items = ref([
    {
        label: 'Inicio',
        route: 'inicio'
    },
    {

        label: 'Intitucional',
        items: [
            {
                label: 'Autoridades',
                route: 'autoridades'
            },
            {
                label: 'Bloques',
                route: 'bloques'
            },
            {
                label: 'Comisiones',
                route: 'comisiones'
            }
        ]
    },
    {
    label: 'Servicios',
        items: [
            {
                label: 'Turismo',
                route: 'turismo'
            },
            {
                label: 'Teléfonos Utiles',
                route: 'telefonos'
            }
        ]
    },
    {
        label: 'Noticias',
        route: 'noticias'
    },
    {
        label: 'Contacto',
        route: 'contacto'
    },
    {
        label: 'Digesto',
        route: 'digestos'
    },
]);

const showingNavigationDropdown = ref(false);

</script>

<template>
    <div>
        <div class="min-h-screen ">
            <nav class="bg-white border-b ">
                <!-- Primary Navigation Menu -->
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-10 h-20 p-2">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('inicio')">
                                    <ApplicationMark class="block h-12 w-12" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden ml-16 space-x-8 sm:-my-px  sm:flex">
                                <Menubar :model="items" style="border: none !important;">
                                    <template #item="{ item, props, hasSubmenu }">
                                        <NavLink :active="route().current(item.route)" v-if="item.route" v-slot="{ href, navigate }" :href="route(item.route)">
                                            <a v-ripple :href="item.route" v-bind="props.action" @click="navigate">
                                                <span class="ml-2 text-sky-500 font-sans">{{ item.label }}</span>
                                            </a>
                                        </NavLink>
                                        <a v-else v-ripple :href="item.route" :target="item.target" v-bind="props.action">
                                            <span class="ml-2 text-sky-500 font-sans">{{ item.label }}</span>
                                            <span v-if="hasSubmenu" class="pi pi-fw pi-angle-down ml-2" />
                                        </a>
                                    </template>
                                </Menubar>

                            </div>

                        </div>

                        <div class="sm:flex sm:items-center sm:ms-6">
                        <!-- Social Media Iconos -->
                            <div class="ms-3 relative" >
                                <ul class="flex space-x-3">
                                    <i>
                                        <!-- Facebook -->
                                        <button
                                        type="button"
                                        data-twe-ripple-init
                                        data-twe-ripple-color="light"
                                        class="mb-1 inline-block rounded bg-[#1877f2] px-2 py-2 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                        <span class="[&>svg]:h-4 [&>svg]:w-4">
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor"
                                            viewBox="0 0 320 512">
                                            <path
                                                d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                            </svg>
                                        </span>
                                        </button>
                                    </i>
                                    <li>
                                        <!-- Instagram -->
                                        <button
                                        type="button"
                                        data-twe-ripple-init
                                        data-twe-ripple-color="light"
                                        class="mb-1 inline-block rounded bg-[#c13584] px-2 py-2 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                        <span class="[&>svg]:h-4 [&>svg]:w-4">
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor"
                                            viewBox="0 0 448 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                            <path
                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                            </svg>
                                        </span>
                                        </button>
                                    </li>
                                    <li>
                                        <!-- Telegram -->
                                        <button
                                        type="button"
                                        data-twe-ripple-init
                                        data-twe-ripple-color="light"
                                        class="mb-1 inline-block rounded bg-[#0088cc] px-2 py-2 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                        <span class="[&>svg]:h-4 [&>svg]:w-4">
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor"
                                            viewBox="0 0 496 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                            <path
                                                d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z" />
                                            </svg>
                                        </span>
                                        </button>
                                    </li>
                                    <li>
                                        <!-- Youtube -->
                                        <button
                                        type="button"
                                        data-twe-ripple-init
                                        data-twe-ripple-color="light"
                                        class="mb-1 inline-block rounded bg-[#ff0000] px-2 py-2 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                        <span class="[&>svg]:h-4 [&>svg]:w-4">
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor"
                                            viewBox="0 0 576 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                            <path
                                                d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                                            </svg>
                                        </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" @click="showingNavigationDropdown = ! showingNavigationDropdown">
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <Menubar :model="items" style="border: none !important;">
                                    <template #item="{ item, props, hasSubmenu }">
                                        <NavLink :active="route().current(item.route)" v-if="item.route" v-slot="{ href, navigate }" :href="route(item.route)">
                                            <a v-ripple :href="item.route" v-bind="props.action" @click="navigate">
                                                <span class="ml-2 text-sky-500 font-sans">{{ item.label }}</span>
                                            </a>
                                        </NavLink>
                                        <a v-else v-ripple :href="item.route" :target="item.target" v-bind="props.action">
                                            <span class="ml-2 text-sky-500 font-sans">{{ item.label }}</span>
                                            <span v-if="hasSubmenu" class="pi pi-fw pi-angle-down ml-2" />
                                        </a>
                                    </template>
                                </Menubar>
                    </div>

                </div>
            </nav>

            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>

        <!-- footer -->
        <footer class="sm:max-w-1 lg:max-w-full md:max-w-full py-6 text-center text-sm text-white  bg-sky-300">
            © 2024 - Consejo Deliberante de Arauco - Todos los Derechos Reservados.
        </footer>
    </div>
</template>


