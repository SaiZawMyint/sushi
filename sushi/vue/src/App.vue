<template>
  <router-view></router-view>
  <PopNotiVue v-if="store.state.popUpNoti.show"></PopNotiVue>
</template>
<script setup>
import { useStore } from 'vuex';
import PopNotiVue from './components/awesomeui/PopNoti.vue'
const store = useStore()
</script>