<template v-if="store.state.modalBox.data.show">
    <div class="fixed w-full h-full overflow-hidden backdrop-blur-sm bg-[#0f172acc] modal" @click="closeModalOut">
        <div class="shadow-lg rounded-lg bg-[#1e293b] text-white p-2 flex modal-box flex-col" @click.stop=""
            :class="[store.state.modalBox.data.width, store.state.modalBox.data.height, store.state.modalBox.data.animation]">
            <slot></slot>
            <div v-html="store.state.modalBox.data.data" class="h-full">

            </div>
            <div class="flex items-center justify-between p-2">
                <button class="p-2 m-2 rounded-lg hover:bg-[#0000004c]"
                    @click="closeModal">{{store.state.modalBox.data.cancelBtn}}</button>
                <button class="p-2 m-2 rounded-lg bg-[#0000004c] text-white hover:bg-[#0000009c]"
                    @click="store.state.modalBox.data.ok">{{store.state.modalBox.data.okBtn}}</button>
            </div>
            <button
                class="absolute top-2 right-2 w-8 h-8 rounded-full hover:bg-[#0000004c] flex items-center justify-center close-modal"
                @click="closeModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>

            </button>
        </div>
    </div>
</template>
<script setup>
import { useStore } from 'vuex';
const store = useStore()
console.log(store.state.modalBox.data.show)
function closeModalOut(e){
    e.stopPropagation()
    var target = document.querySelector('.close-modal');
    target.click()
}
function closeModal(e){
    let parent = e.target.closest('.modal-box')
    itech().wait(30,function(){
        parent.classList.add('out')
    },function(){
        store.state.modalBox.data.show = !store.state.modalBox.data.show
    })
}
</script>
<style>
.modal{
    top: 0;
    left: 0;
    z-index: 999;
    box-shadow: inset 0 1px 0 0 hsl(0deg 0% 100% / 5%);
}
.modal-box{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.fade{
    animation: fade .1s 1 ease-in;
}
.slideDown{
    animation: fade .2s 1 ease-in, slideDown .1s 1 ease-out;
}
.slideDown.out{
    animation: fadeOut .2s 1 ease-out, slideUp .1s 1 ease-out;
}
.fade.out{
    animation: fadeOut .2s 1 ease-out;
}
@keyframes fade {
    from{
        opacity: 0;
    }
    to{
        opacity: 1;
    }
}
@keyframes fadeOut {
    from{
        opacity: 1;
    }
    to{
        opacity: 0;
    }
}
@keyframes slideDown {
    from{
        top: 40%;
    }
    to{
        top: 50%;
    }
}
@keyframes slideUp {
    from{
        top: 50%;
    }
    to{
        top: 30%;
    }
}
</style>