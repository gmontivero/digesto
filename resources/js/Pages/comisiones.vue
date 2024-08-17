<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';
import comisionmiembro from '@/Components/comisionmiembro.vue';

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
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <section id="our-team" class="bg-gray-100 py-32">
                    <div class="container mx-auto px-4">
                        <h2 class="text-3xl font-bold text-center mb-8 text-primary">Comisión de Legislación General</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                            <div v-for="autoridad in autoridades" :key="autoridad.id">
                                <comisionmiembro :src="autoridad.imagen" :name="autoridad.nombre" :cargo="autoridad.cargo"/>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </Home>
</template>
