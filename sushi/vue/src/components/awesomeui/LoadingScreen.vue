<template>
    <div class="fixed w-full h-full overflow-hidden backdrop-blur-sm bg-[#0f172acc] loading">
        <div class="comp-view flex items-center justify-center">
            <div class="circle f2"></div>
            <div class="circle f3"></div>
            <div class="circle f4"></div>
            <div class="circle f5"></div>
        </div>
    </div>
</template>
<style>
.loading{
    z-index: 999;
    top: 0;
    left: 0;
}
.comp-view{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
}
.circle{
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: #357941;
    margin: 0px 10px;
    transition: all .4s;
}
.circle.f2{
    animation: scls 1s infinite ease-in;
}
.circle.f3{
    animation: scls1 1s infinite ease-in;
}.circle.f4{
    animation: scls2 1s infinite ease-in;
}.circle.f5{
    animation: scls3 1s infinite ease-in;
}.circle.f6{
    animation: scls4 1s infinite ease-in;
}
@keyframes scls {
    0%{
        transform: scale(1.3);
    }
    20%{
        transform: scale(1);
    }
    40%{
        transform: scale(1);
    }
    60%{
        transform: scale(1);
    }
    80%{
        transform: scale(1);
    }
}
@keyframes scls1 {
    0%{
        transform: scale(1);
    }
    20%{
        transform: scale(1.3);
    }
    40%{
        transform: scale(1);
    }
    60%{
        transform: scale(1);
    }
    80%{
        transform: scale(1);
    }
}
@keyframes scls2 {
    0%{
        transform: scale(1);
    }
    20%{
        transform: scale(1);
    }
    40%{
        transform: scale(1.3);
    }
    60%{
        transform: scale(1);
    }
    80%{
        transform: scale(1);
    }
}
@keyframes scls3 {
    0%{
        transform: scale(1);
    }
    20%{
        transform: scale(1);
    }
    40%{
        transform: scale(1);
    }
    60%{
        transform: scale(1.3);
    }
    80%{
        transform: scale(1);
    }
}
@keyframes scls4 {
    0%{
        transform: scale(1);
    }
    20%{
        transform: scale(1);
    }
    40%{
        transform: scale(1);
    }
    60%{
        transform: scale(1);
    }
    80%{
        transform: scale(1.3);
    }
}

</style>