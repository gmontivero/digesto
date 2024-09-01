<script setup>
import Home from '@/Pages/Home.vue';
import CarruselImage from '@/Components/CarruselImage.vue';
import CardInfo from '@/Components/CardInfo.vue';
import fotoperfil from '@/Components/fotoperfil.vue';

const autoridades = [
    {
        id : 1,
        nombre: 'Ramón Allendes',
        cargo: 'Vice Intendente',
        info: 'Fue consejal, miembro de la camara de Legisladores, miembre de la comision pro festejo de la fiesta de la olivicultura ',
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
            <div class="max-w-6xl mx-auto ">
                <div class="grid grid-cols-3 gap-3 ">
                    <div v-for="autoridad in autoridades" :key="autoridad.id">
                        <fotoperfil :src="autoridad.imagen" :info="autoridad.info" :name="autoridad.nombre" :cargo="autoridad.cargo"/>
                    </div>
                </div>
            </div>
        </div>
    </Home>
</template>
