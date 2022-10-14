<template>
    <div
        class="balance-icon w-[80px] h-[80px] rounded-full bg-[#0000004c] flex items-center justify-center p-2 rounded-prog">
        <slot></slot>
    </div>
</template>
<script setup>
    const data = {
        value: 80,
        icons: null
    }
</script>
<style>
.balance-icon{
    min-width: 80px;
}
</style>