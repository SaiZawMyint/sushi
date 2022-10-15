<template>
    <div class="max-w-full py-4 px-8 my-2 m">
        <div class="p-2 rounded-lg m-2 backdrop-blur-sm bg-white/30 w-[fit-content] inline-block">
            <div class="flex p-1 items-center">
                <RoundedProgressVue>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="w-10 h-10">
                        <path fill="#eeb501"
                            d="M12 9c5.345 0 10-2.015 10-4.5s-4.655-4.5-10-4.5c-5.344 0-10 2.015-10 4.5s4.656 4.5 10 4.5zm.187-4.019c-.598-.18-2.428-.332-2.428-1.35 0-.568.668-1.074 1.917-1.187v-.444h.642v.422c.468.011.989.062 1.569.18l-.234.685c-.441-.101-.933-.199-1.416-.199l-.145.002c-.962.04-1.041.574-.373.799 1.092.337 2.532.585 2.532 1.479 0 .714-.867 1.097-1.934 1.192v.44h-.642v-.416c-.659-.006-1.353-.113-1.925-.304l.295-.686c.488.125 1.102.253 1.655.253.145 0 .284-.009.417-.028.737-.106.884-.602.07-.838zm-.187 16.019c3.783 0 7.708-.969 10-2.803v1.303c0 2.485-4.655 4.5-10 4.5-5.344 0-10-2.015-10-4.5v-1.304c2.292 1.835 6.217 2.804 10 2.804zm0-10c3.783 0 7.708-.969 10-2.803v1.303c0 2.485-4.655 4.5-10 4.5-5.344 0-10-2.015-10-4.5v-1.303c2.292 1.834 6.217 2.803 10 2.803zm0 5c3.783 0 7.708-.969 10-2.803v1.303c0 2.485-4.655 4.5-10 4.5-5.344 0-10-2.015-10-4.5v-1.304c2.292 1.835 6.217 2.804 10 2.804z" />
                    </svg>
                </RoundedProgressVue>
                <div class="px-2">
                    <h3 class=" text-2xl font-bold w-[100px]">Balance</h3>
                    <div class="flex justify-start items-center">
                        <div class="p-2 font-bold flex rounded-lg hover:bg-[#0000004c] cursor-pointer"
                            @click="balanceCharge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path fill="#5ac3b6"
                                    d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 19l1.5-5h-4.5l7-9-1.5 5h4.5l-7 9z" />
                            </svg>
                            <span class="px-2">120 $</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-2 rounded-lg m-2 backdrop-blur-sm bg-white/30 w-[fit-content] inline-block">
            <div class="flex p-1 items-center">
                <RoundedProgressVue>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke="#5ac3b6"
                            d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                    </svg>
                </RoundedProgressVue>
                <div class="p-2">
                    <h3 class="px-2 text-2xl font-bold">Stores</h3>
                    <span class="px-3 font-bold">3.35% cap</span>
                </div>
            </div>
        </div>
        <div class="p-2 rounded-lg m-2 backdrop-blur-sm bg-white/30  w-[fit-content] inline-block">
            <div class="flex p-1 items-center">
                <RoundedProgressVue>
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        fill-rule="evenodd" clip-rule="evenodd" class="w-10 h-10">
                        <path fill="#72858C"
                            d="M11.5 23l-8.5-4.535v-3.953l5.4 3.122 3.1-3.406v8.772zm1-.001v-8.806l3.162 3.343 5.338-2.958v3.887l-8.5 4.534zm-10.339-10.125l-2.161-1.244 3-3.302-3-2.823 8.718-4.505 3.215 2.385 3.325-2.385 8.742 4.561-2.995 2.771 2.995 3.443-2.242 1.241v-.001l-5.903 3.27-3.348-3.541 7.416-3.962-7.922-4.372-7.923 4.372 7.422 3.937v.024l-3.297 3.622-5.203-3.008-.16-.092-.679-.393v.002z" />
                    </svg>
                </RoundedProgressVue>
                <div class="p-2">
                    <h3 class="px-2 text-2xl font-bold">Products</h3>
                    <span class="px-3 font-bold">12202</span>
                </div>
            </div>
        </div>
        <div class="p-2 rounded-lg m-2 backdrop-blur-sm bg-white/30  w-[fit-content] inline-block">
            <div class="flex p-1 items-center">
                <RoundedProgressVue>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </RoundedProgressVue>
                <div class="p-2">
                    <h3 class="px-2 text-2xl font-bold">Customers</h3>
                    <span class="px-3 font-bold">55049</span>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { useStore } from 'vuex';
import RoundedProgressVue from '../awesomeui/RoundedProgress.vue';
import SearchBoxVue from '../awesomeui/SearchBox.vue';
const store = useStore();
function balanceCharge(){
    var element = document.createElement('div');
    element.innerHTML = "<h1>Hello</h1>"
    store.dispatch('modalBox', {
            width: 'w-[40%]',
            height: 'h-[70%]',
            show: true,
            cancelBtn: 'Close',
            okBtn: 'Confirm',
            animation: 'slideDown',
            data: `<h1 class="font-bold">Hello world</h1>`,
            ok: function(data){
                console.log(data,'click')
            }
    });
}

</script>