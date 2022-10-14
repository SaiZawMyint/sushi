<template>
    <div class="search-field py-2">
            <div class="flex py-2 items-center justify-start w-[fit-centent]">
                <input type="text" class="rounded-lg mx-2 backdrop-blur-sm bg-[#0f172acc] text-white">
                <button class="w-10 h-10 rounded-full flex items-center justify-center mx-2 bg-[#0f172acc] hover:opacity-70">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke="#FFF"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </div>
        </div>
</template>
<script setup>
import Datepicker from '@vuepic/vue-datepicker';
</script>
<style>
/* .dp__menu,
.dp__theme_light{
    background-color: #0f172a !important;
}
.dp__action_row, .dp__button{
    background-color: transparent !important;
}
.dp__calendar_header,
.dp__cell_inner{
    color: #FFF !important;
}
.dp__range_between{
    border: 0 !important;
}
.dp__cell_inner.dp__pointer.dp__range_between,
.dp__cell_inner.dp__pointer.dp__range_end,
.dp__cell_inner.dp__pointer.dp__range_start{
    background-color: rgb(255 255 255 / 0.3) !important;
    color: #0f172a !important;
}
.dp__button:hover{
    background-color: #0000004c !important;
}
.dp__overlay,
.dp__pointer{
    background-color: #0f172a !important;
}
.dp__time_display,.dp__time_col{
    color: #FFF !important;
}
.dp__month_year_select{
    color: #FFF;
}
.dp__month_year_select:hover{
    background-color: #0000004c !important;
    color: #FFF !important;
}
.dp__overlay {
    color: #FFF !important;
} */
</style>