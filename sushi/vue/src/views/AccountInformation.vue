<template>
    <div class="background backdrop-blur-sm"></div>
    <LoadingScreenVue v-if="store.state.loadingScreen.show"></LoadingScreenVue>
    <ModalBoxVue v-if="store.state.modalBox.data.show && store.state.modalBox.step.one">
        <div class="p-2 border-b-2 border-gray-700 text-center">
            <h3 class="text-2xl text-gray-300">Account Information</h3>
        </div>
        <div class="w-full p-3 flex justify-center">
            <form class="w-full">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2"
                            for="grid-first-name">
                            First Name
                        </label>
                        <input v-model="inputData.firstName"
                            class="appearance-none block w-full bg-gray-200 text-gray-800 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="Fist name">
                        <p class="text-red-400 text-sm" v-if="error!=null && error.firstName">{{error.firstName}}</p>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Last Name
                        </label>
                        <input v-model="inputData.lastName"
                            class="appearance-none block w-full bg-gray-200 text-gray-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" placeholder="Last name">
                        <p class="text-red-400 text-sm" v-if="error!=null && error.lastName">{{error.lastName}}</p>
                    </div>
                </div>
                <!-- <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Password
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password" type="password" placeholder="******************">
                            <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                        </div>
                    </div> -->
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2"
                            for="grid-city">
                            City
                        </label>
                        <input v-model="inputData.city"
                            class="appearance-none block w-full bg-gray-200 text-gray-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-city" type="text" placeholder="City">
                        <p class="text-red-400 text-sm" v-if="error!=null && error.city">{{error.city}}</p>

                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2"
                            for="grid-state">
                            State
                        </label>
                        <div class="relative">
                            <select v-model="inputData.region"
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-state">
                                <option value="0">Choose Region</option>
                                <option value="Kachin">Kachin</option>
                                <option value="Kayah">Kayah</option>
                                <option value="Kayin">Kayin</option>
                                <option value="Chin">Chin</option>
                                <option value="Mon">Mon</option>
                                <option value="Rakhine">Rakhine</option>
                                <option value="Shan">Shan</option>
                                <option value="Mandalay">Mandalay</option>
                                <option value="Yangon">Yangon</option>
                                <option value="Tanintharyi">Tanintharyi</option>
                                <option value="Sagaing">Sagaing</option>
                                <option value="Magway">Magway</option>
                                <option value="Bago">Bago</option>
                                <option value="Ayeyarwady">Ayeyarwady</option>
                            </select>
                            <p class="text-red-400 text-sm" v-if="error!=null && error.region">{{error.region}}</p>

                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2"
                            for="grid-zip">
                            Zip
                        </label>
                        <input v-model="inputData.postal"
                            class="appearance-none block w-full bg-gray-200 text-gray-800 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-zip" type="text" placeholder="00000">
                        <p class="text-red-400 text-sm" v-if="error!=null && error.postal">{{error.postal}}</p>

                    </div>
                </div>
                <div class="flex-col flex-wrap -mx-3 m-6">
                    <div class="w-[fit-content] px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2"
                            for="grid-phone-number">
                            Phone Number
                        </label>
                        <div class="flex items-center border-2 rounded-lg overflow-hidden bg-gray-200">
                            <select id="region" name="region"
                                class="h-full text-gray-700 rounded bg-[transparent] border-none focus:outline-none focus:box-showdow-none focus:border-none border-transparent focus:border-transparent focus:ring-0">
                                <option value="0">+95</option>
                            </select>
                            <input v-model="inputData.phoneNumber"
                                class="appearance-none block w-[200px] bg-[transparent] text-gray-800 py-3 px-4 leading-tight border-none outline-none focus:outline-none border-transparent focus:border-transparent focus:ring-0"
                                id="grid-phone-number" type="text" placeholder="0 000 0000 000">
                        </div>
                    </div>
                    <p class="text-red-400 px-3 text-sm" v-if="error!=null && error.phoneNumber">{{error.phoneNumber}}
                    </p>
                </div>
            </form>
        </div>
    </ModalBoxVue>
    <ModalBoxVue v-if="store.state.modalBox.data.show && store.state.modalBox.step.two">
        <div class="p-2 border-b-2 border-gray-700 text-center">
            <h3 class="text-2xl text-gray-300">Account Information</h3>
        </div>
        <div class="w-full p-3 flex justify-center">
            <form class="w-full">
                <div class="flex-col flex-wrap -mx-3 m-6">
                    <div class="w-full px-10 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2"
                            for="grid-phone-number">
                            Phone Number
                        </label>
                        <div class="flex items-center border-2 rounded overflow-hidden bg-gray-200">
                            <select id="region" name="region"
                                class="h-full text-gray-700 rounded bg-[transparent] border-none focus:outline-none focus:box-showdow-none focus:border-none border-transparent focus:border-transparent focus:ring-0">
                                <option value="0">+95</option>
                            </select>
                            <input v-model="inputData.phoneNumber"
                                class="appearance-none block w-[200px] bg-[transparent] text-gray-800 py-3 px-4 leading-tight border-none outline-none focus:outline-none border-transparent focus:border-transparent focus:ring-0"
                                id="grid-phone-number" type="text" placeholder="0 000 0000 000">
                        </div>
                    </div>
                    <p class="text-red-400 px-3 text-sm" v-if="error!=null && error.phoneNumber">{{error.phoneNumber}}
                    </p>
                </div>
                <div class="flex-col flex-wrap -mx-3 m-6">
                    <div class="w-full px-10 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2"
                            for="grid-phone-number">
                            Verify Code
                        </label>
                        <div class="flex items-center border-2 rounded overflow-hidden bg-gray-200">
                            <div
                                class="h-full px-2 cursor-pointer text-gray-700 rounded bg-[transparent] border-none focus:outline-none focus:box-showdow-none focus:border-none border-transparent focus:border-transparent focus:ring-0">
                                Resend
                            </div>
                            <input v-model="inputData.verifyCode"
                                class="appearance-none block w-[200px] bg-[transparent] text-gray-800 py-3 px-4 leading-tight border-none outline-none focus:outline-none border-transparent focus:border-transparent focus:ring-0"
                                id="grid-phone-number" type="text" placeholder="00000">
                        </div>
                    </div>
                    <p class="text-red-400 px-3 text-sm" v-if="error!=null && error.verifyCode">{{error.verifyCode}}
                    </p>
                </div>
            </form>
        </div>
    </ModalBoxVue>
</template>
<script setup>
import { useStore } from 'vuex';
import ModalBoxVue from '../components/awesomeui/ModalBox.vue';
import { validateAccount } from '../js/validation.js'
import LoadingScreenVue from '../components/awesomeui/LoadingScreen.vue'
import { ref } from 'vue'

const store = useStore();
let error = ref()
const inputData = {
    firstName: '',
    lastName: '',
    city: '',
    region: '',
    postal: '',
    phoneNumber: '',
    verifyCode: ''
}
stepOneFun()

function stepOneFun(){
    store.state.modalBox.data = {
    width: 'w-[fit-content]',
    height: 'h-[fit-content]',
    show: true,
    okBtn: 'Continue',
    animation: 'slideLeft',
    ok: function (data) {
        validateAccount(
            {
                step: 1,
                data: inputData,
                validate: function (data) {
                    if (!data.success) {
                        error.value = data
                        alertWarn()
                    } else {
                        error.value = null
                        changeStep(2)
                    }
                }
            }
        )
    }
}
}
function alertWarn() {
    var modal = document.getElementById('itech-modal-box')
    itech().wait(30, function () {
        modal.classList.add('alert')
    }, function () {
        modal.classList.remove('alert')
    })
}
function changeStep(step) {
    console.log('Error',error)
    store.state.modalBox.step.one = false
    updateStep(step)
}
function updateStep(step) {
    if (step == 2) {
        store.state.modalBox.data.cancelBtn = 'Back'
        store.state.modalBox.data.cancel = function () {
            stepOneFun()
            store.state.modalBox.step.one = true
            store.state.modalBox.step.two = false
            store.state.modalBox.data.cancelBtn = null
            store.state.modalBox.data.cancel = null
        }
        store.state.modalBox.step.two = true
    }
}
</script>
<style>
.background {
    background-color: #0f172acc;
    background-image: url('../assets/img/img_bg_01.jpg');
    width: 100%;
    height: 100%;
    background-size: cover;
}
</style>