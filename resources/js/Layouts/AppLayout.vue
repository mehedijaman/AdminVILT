<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

import Header from './Header.vue';
import Sidebar from './Sidebar.vue';
import Footer from './Footer.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <Head :title="title" />
        <!-- <Banner /> -->
        <Header></Header>
        <Sidebar></Sidebar>

        <main class="p-4 md:ml-64 h-auto pt-20">
        <slot></slot>
        </main>
    </div>
</template>
