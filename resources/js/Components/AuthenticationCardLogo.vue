<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link :href="'/'">
    <div class="flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16">
            <path
                d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
        </svg>


        <div class="font-bold text-2xl"><span class="text-red-500">Admin</span><span class="text-[#42B883]">V</span><span class="
            text-[#756EEC]">I</span><span class="text-red-500">L</span><span class="text-sky-500">T</span></div>
    </div>

    </Link>
</template>
