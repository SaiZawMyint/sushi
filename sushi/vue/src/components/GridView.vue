import { useStore } from 'vuex';
import { useStore } from 'vuex';
import { useStore } from 'vuex';
<template>
    <div class="container mx-auto mt-8">

        <div class="grid grid-cols-3 gap-4">
            <div v-for="store in store" class="bg-[#DEDEC4] rounded shadow-lg overflow-hidden">
                <div class="image-view">
                    <img src="../assets/img/img-01.jpg" alt="">
                </div>
                <div class="text-lg p-2 border-b-2 flex items-center justify-between">
                    <span class="flex items-center ">
                        {{store.name}}
                        <span @click="store.status = !store.status">
                            <span v-if="store.status"
                                class="bg-green-700 w-3 h-3 shadow-lg ml-1 text-sm rounded-full flex items-center justify-center h-fit cursor-pointer"></span>
                            <span v-else
                                class="bg-red-700 w-3 h-3 shadow-lg ml-1 rounded-full flex items-center justify-center h-fit cursor-pointer"></span>
                        </span>
                    </span>
                    <button class="w-8 h-8 rounded-full hover:bg-[#0000004c] flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                </div>

                <div class="px-2 text-ellipsis overflow-hidden max-w-[100%] h-[100px] paragraph ">{{store.description}}</div>
                <div class="p-2 border-t-2 flex items-center justify-start">
                    <span
                        class="bg-gray-100 px-2 py-1 rounded mr-1 cursor-pointer hover:opacity-70 w-[60px] text-ellipsis overflow-hidden whitespace-nowrap">3
                        cats</span>
                    <span
                        class="bg-gray-100 px-2 py-1 rounded mr-1 cursor-pointer hover:opacity-70 w-[100px] text-ellipsis overflow-hidden whitespace-nowrap">120
                        products</span>
                    <span class="bg-gray-100 px-2 py-1 rounded mr-1 cursor-pointer hover:opacity-70">1000$</span>
                    <button class="bg-[#73827D] rounded px-2 py-1 hover:bg-[#73827D4c]">View</button>
                </div>
            </div>
        </div>

    </div>
</template>
<script setup>
import { useStore } from 'vuex';
const store = useStore().state.store.stores;
</script>