<script setup>

const props = defineProps({
    src: {
        type: String,
        default: '',
    },
    name:{
        type: String,
        required : true
    },
    cargo:{
        type: String,
        required : true
    }
});

</script>

<template>
    <div class="bg-white rounded-lg shadow-md p-6 my-6 text-center">
        <img :src="src" alt="Team Member 1" class="w-full rounded-full mb-4">
        <h3 class="text-xl font-semibold mb-2">{{ name }}</h3>
        <p class="text-gray-700">{{ cargo }}</p>
    </div>
</template>
