<template>
    <DashboardComponent>
        <div class="mx-auto max-w-7xl py-2 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between border-b-2">
                <div class="flex items-center">
                    <button class="w-8 h-8 rounded-full bg-gray-700 flex items-center justify-center">
                        <img src="../profiles/profile.svg" alt="" class="w-7 h-7 rounded-full">
                    </button>
                    <h2 class="text-2xl px-2 font-bold tracking-tight text-gray-900 h-fit">
                        {{store.state.store.name}}
                    </h2>
                    <span @click="store.state.store.status = !store.state.store.status">
                        <span v-if="store.state.store.status"
                            class="bg-green-300 mt-2 px-2 pb-1 rounded-full flex items-center justify-center h-fit cursor-pointer hover:bg-[#86efac4c]">active</span>
                        <span v-else
                            class="bg-gray-300 mt-2 px-2 pb-1 rounded-full flex items-center justify-center h-fit cursor-pointer hover:bg-[#cdcdcd4c]">inactive</span>
                    </span>
                </div>
                <div class="flex items-center">
                    <button class="px-3 py-2 bg-sky-500/50 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="pl-2">Store</span>
                    </button>
                </div>
            </div>
            <GridView></GridView>
        </div>
    </DashboardComponent>
</template>
<script setup>
import { useStore } from 'vuex';
import DashboardComponentVue from '../components/DashboardComponent.vue';
import GridViewVue from '../components/GridView.vue';
import GridView from '../components/GridView.vue';
const store = useStore();
</script>