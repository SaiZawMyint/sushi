import { createApp } from 'vue'

import store from './store'
import router from './router'
import './index.css'
import '@vuepic/vue-datepicker/dist/main.css'
import App from './App.vue'
import ModalBox from './components/awesomeui/ModalBox.vue'

createApp(App)
.use(store)
.use(router)
.use(ModalBox)
.mount('#app')

window.itech = function(select){
    select = select instanceof Element ? select: document.querySelector(select)
    return {
        wait: function(time,action,callback){
            let id = null
            let p = 0
            clearInterval(id)
            action()
            id = setInterval(function(){
                if(p > 0){
                    clearInterval(id)
                    callback()
                }
                p++
            },time)
        },
        find: function (el, cls) {
            while ((el = el.parentElement) && !el.classList.contains(cls));
            return el;
        }
    }
}
