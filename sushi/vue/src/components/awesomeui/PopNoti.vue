<template v-if="store.state.popUpNoti.show">
    <div :class="store.state.popUpNoti.cls" class="p-3 backdrop-blur-sm bg-[#0f172acc] text-gray-300 rounded-lg shadow-lg flex items-center justify-between pop-up">
        <p class="pr-10">
            {{store.state.popUpNoti.message}}
        </p>
        <button @click="closeNoti"
        v-if="store.state.popUpNoti.done" class="w-8 h-8 rounded-full close-btn flex items-center justify-center bg-[#0000004c] hover:bg-[#0000002c]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            
        </button>
        <button v-else class="w-8 h-8 rounded-full flex items-center justify-center">
            <span class="loading-i w-full h-full">
                <span class="load one"></span>
                <span class="load two"></span>
            </span>
        </button>
    </div>
</template>
<script setup>
import { useStore } from 'vuex';
const store = useStore()
function closeNoti(){
    itech().wait(50,function(){
        store.state.popUpNoti.cls = 'hide'
    },function(){
        store.state.popUpNoti.show = false
    })
    
}
</script>
<style>
.pop-up *{
    transition: all .1s;
}
.pop-up{
    position: fixed;
    right: 20px;
    bottom: 20px;
    z-index: 999;
    box-shadow: inset 0 0px 1px 1px hsl(0deg 0% 100% / 5%);
    cursor: pointer;
}
.close-btn{
    display: none;
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
}
.pop-up:hover > .close-btn{
    display: flex;
}
.pop-up.show{
    animation: show .2s 1 ease-in;
}
.pop-up.hide{
    animation: hide .1s 1 ease-in;
}
.loading-i{
    position: relative;
}
.load{
    width: 15px;
    height: 15px;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.load.one{
    background-color: #71c2cc89;
    left: 0;
    animation: loadone .7s infinite ease-in;
}
.load.two{
    background-color: #4996a289;
    right: 0;
    animation: loadtwo .7s infinite ease-in;
}
@keyframes loadone{
    from{
        left: 0;
    }
    to{
        left: calc(100% - 15px);
    }
}
@keyframes loadtwo {
    from{right: 0;}
    to{right: calc(100% - 15px);}
}
@keyframes show{
    from{
        bottom: -20px;
    }
    to{
        bottom: 20px
    }
}
@keyframes hide{
    from{
        bottom: 20px;
    }
    to{
        bottom: -20px
    }
}
</style>