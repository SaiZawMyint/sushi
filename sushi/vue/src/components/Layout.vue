<template>
    <!--
    This example requires updating your template:

    ```
    <html class="h-full bg-gray-100">
    <body class="h-full">
    ```
  -->
    <div class="min-h-full flex relative overflow-hidden h-[100%] bg-gray-800">
        <MainMenuVue></MainMenuVue>
        <div class="bg-none relative overflow-auto">
            <div class="p-2 flex items-center justify-between w-full">
                <SearchBox></SearchBox>
                <div class="flex items-center justify-center p-2">
                    <button class="w-10 h-10 m-1 flex items-center justify-center rounded-full bg-[#0f172acc] profile">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke="#ddd"
                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round"  stroke="#ddd" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                    <button class="w-12 h-12 m-1 flex items-center justify-center rounded-full bg-[#0f172acc] profile">
                        <img src="../profiles/img-profile.jpg" alt="Profile" class="" />
                    </button>
                    
                </div>
            </div>
            <!-- <div class="p-10"></div> -->
            <router-view></router-view>
        </div>
    </div>
    <div v-if="store.state.modalBox.data.show">
        <ModalBoxVue></ModalBoxVue>
    </div>

</template>

<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import {useStore} from 'vuex'
import {computed} from 'vue'
import { useRouter } from 'vue-router';
import ModalBoxVue from './awesomeui/ModalBox.vue';
const store = useStore()
const router = useRouter()

function logout(){
    store.dispatch('logout').then(() => {
        console.log('logout')
        router.push({
            name: 'login'
        })
    })

}

const user = computed({
    get(){
        return store.state.user.data
    }
})
const navigation = [
  { name: 'Dashboard', to: {name: 'dashboard'} },
  { name: 'Stores', to: {name: 'stores'}},
]
const userNavigation = [
  { name: 'Your Profile', href: '#', opt: null },
  { name: 'Settings', href: '#', opt: null  },
  { name: 'Sign out', href: '#', opt: logout  },
]
import MainMenuVue from './MainMenu.vue';
import SearchBox from './awesomeui/SearchBox.vue';
</script>