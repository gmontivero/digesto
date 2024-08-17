<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';

const autoridades = [
    {
        id : 1,
        nombre: 'Ramón Allendes',
        cargo: 'Vice Intendente',
        imagen:'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxoZWFkc2hvdHxlbnwwfDB8fHwxNjk1ODE3MjEzfDA&ixlib=rb-4.0.3&q=80&w=1080'
    },
    {
        id : 1,
        nombre: 'Juan Perez',
        cargo: 'Presidente',
        imagen:'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxoZWFkc2hvdHxlbnwwfDB8fHwxNjk1ODE3MjEzfDA&ixlib=rb-4.0.3&q=80&w=1080'
    },
    {
        id : 1,
        nombre: 'Maria Gonzales',
        cargo: 'Directora',
        imagen:'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxoZWFkc2hvdHxlbnwwfDB8fHwxNjk1ODE3MjEzfDA&ixlib=rb-4.0.3&q=80&w=1080'
    },
    {
        id : 1,
        nombre: 'Carlos Diaz',
        cargo: 'Adjunto',
        imagen:'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxoZWFkc2hvdHxlbnwwfDB8fHwxNjk1ODE3MjEzfDA&ixlib=rb-4.0.3&q=80&w=1080'
    },
    {
        id : 1,
        nombre: 'Jose Fernandez',
        cargo: '2° Adjunto',
        imagen:'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxoZWFkc2hvdHxlbnwwfDB8fHwxNjk1ODE3MjEzfDA&ixlib=rb-4.0.3&q=80&w=1080'
    },
];

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
                        <div class="bg-blue-200 p-4 col-span-2">Teléfonos Utiles   </div>
                        <div class="bg-gray-100 p-4">Emergencias   </div>
                        <div class="bg-gray-100 p-4">911</div>
                        <div class="bg-gray-100 p-4">Hospital San Nicolas</div>
                        <div class="bg-gray-100 p-4">911</div>
                        <div class="bg-gray-100 p-4">Bomberos</div>
                        <div class="bg-gray-100 p-4">911</div>
                        <div class="bg-gray-100 p-4">Policia</div>
                        <div class="bg-gray-100 p-4">911</div>
                        <div class="bg-gray-100 p-4">Municipalidad</div>
                        <div class="bg-gray-100 p-4">54546546</div>
                        <div class="bg-gray-100 p-4">Registro Civil</div>
                        <div class="bg-gray-100 p-4">54546546</div>
                    </div>
                </main>
            </div>
        </div>
    </Home>
</template>
