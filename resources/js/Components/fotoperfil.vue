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
    <header class="px-2 py-4 mt-16 flex flex-col justify-center items-center text-center">
    <img class="inline-flex object-cover border-4 border-indigo-600 rounded-full shadow-[5px_5px_0_0_rgba(0,0,0,1)] shadow-indigo-600/100 bg-indigo-50 text-indigo-600 h-24 w-24 !h-48 !w-48" :src="src" alt="">
    <h1 class="text-2xl text-gray-500 font-bold mt-2">
        {{ name }}
    </h1>
    <h2 class="text-base md:text-xl text-gray-500 font-bold">
        {{ cargo}}
        <a href="" target="_blank"
        class="text-indigo-900 hover:text-indigo-600 font-bold border-b-0 hover:border-b-4 hover:border-b-indigo-300 transition-all mb-2">
        </a>
    </h2>

    <!-- <ul class="flex flex-row mt-2">

        <li class="mx-2">
        <a href="" target="_blank" aria-label="LinkedIn">
            <svg class="h-6 text-indigo-700 hover:text-indigo-300" fill="currentColor" role="img" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <title>LinkedIn</title>
            <path
                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z">
            </path>
            </svg> </a>
        </li>

        <li class="mx-2">
        <a href="" target="_blank" aria-label="Twitter">
            <svg class="h-6 text-indigo-700 hover:text-indigo-300" fill="currentColor" role="img" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Twitter</title>
            <path
                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z">
            </path>
            </svg> </a>
        </li>



        <li class="mx-2">
        <a href="" target="_blank" aria-label="Email">
            <svg class="h-6 text-indigo-700 hover:text-indigo-300" fill="currentColor" role="img" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Mail.Ru</title>
            <path
                d="M15.61 12c0 1.99-1.62 3.61-3.61 3.61-1.99 0-3.61-1.62-3.61-3.61 0-1.99 1.62-3.61 3.61-3.61 1.99 0 3.61 1.62 3.61 3.61M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12c2.424 0 4.761-.722 6.76-2.087l.034-.024-1.617-1.879-.027.017A9.494 9.494 0 0 1 12 21.54c-5.26 0-9.54-4.28-9.54-9.54 0-5.26 4.28-9.54 9.54-9.54 5.26 0 9.54 4.28 9.54 9.54a9.63 9.63 0 0 1-.225 2.05c-.301 1.239-1.169 1.618-1.82 1.568-.654-.053-1.42-.52-1.426-1.661V12A6.076 6.076 0 0 0 12 5.93 6.076 6.076 0 0 0 5.93 12 6.076 6.076 0 0 0 12 18.07a6.02 6.02 0 0 0 4.3-1.792 3.9 3.9 0 0 0 3.32 1.805c.874 0 1.74-.292 2.437-.821.719-.547 1.256-1.336 1.553-2.285.047-.154.135-.504.135-.507l.002-.013c.175-.76.253-1.52.253-2.457 0-6.617-5.383-12-12-12">
            </path>
            </svg> </a>
        </li>
    </ul> -->

    </header>
</template>
