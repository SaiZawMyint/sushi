<template>
    <div class="dashboard-menu-box p-3 flex flex-col">
        <div class="backdrop-blur-sm bg-white/30 w-full rounded-lg p-2 mt-0 mb-3 relative">
            <div class="flex">
                <div class="rounded-full p-0 overflow-hidden w-[60px] h-[60px] border-2 profile">
                    <img src="../profiles/img-profile.jpg" alt="Profile" class="">
                </div>
                <div class="flex flex-col">
                    <h3 class="px-2 text-2xl font-bold">Admin</h3>
                    <div class="p-2 flex">
                        <span class="w-6 h-6 rounded-full bg-gray-300 mr-2"></span>
                        <span class="w-6 h-6 rounded-full bg-gray-300 mr-2"></span>
                        <span class="w-6 h-6 rounded-full bg-gray-300 mr-2"></span>
                    </div>
                </div>
            </div>
            <button
                class="absolute w-8 h-8 rounded-full bg-gray-500 top-2 right-2 flex items-center justify-center hover:bg-[#0000004c]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </button>
        </div>
        <div class="h-full w-full rounded-lg backdrop-blur-sm bg-white/30 flex flex-col">
            <div class="flex flex-col">
                <div class="flex items center justify-between border-b-2 p-2">
                    <div class="flex items-center justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <h3 class="pl-2 font-bold">Dashboard</h3>
                    </div>
                    <button class="w-7 h-7 rounded-full flex items-center justify-cener p-1 hover:bg-[#0000004c]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-col">
                    <button
                        class="w-full cursor-pointer py-1 px-4 mb-1 flex items-center justify-start hover:bg-[#0000004c]">
                        <div class="w-[40px]"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                            </svg></div>
                        <span class="text-lg py-1">Stores</span>
                    </button>
                </div>
                <div class="flex flex-col">
                    <button
                        class="w-full cursor-pointer py-1 px-4 mb-1 flex items-center justify-start hover:bg-[#0000004c]">
                        <div class="w-[40px]"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg></div>
                        <span class="text-lg py-1">Balances</span>
                    </button>
                </div>
                <div class="flex flex-col">
                    <button
                        class="w-full cursor-pointer py-1 px-4 mb-1 flex items-center justify-start hover:bg-[#0000004c]">
                        <div class="w-[40px]"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                class="w-5 h-5" viewBox="0 0 486.742 486.742"
                                style="enable-background:new 0 0 486.742 486.742;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M33,362.371v78.9c0,4.8,3.9,8.8,8.8,8.8h61c4.8,0,8.8-3.9,8.8-8.8v-138.8l-44.3,44.3    C57.9,356.071,45.9,361.471,33,362.371z" />
                                        <path
                                            d="M142,301.471v139.8c0,4.8,3.9,8.8,8.8,8.8h61c4.8,0,8.8-3.9,8.8-8.8v-82.3c-13.9-0.3-26.9-5.8-36.7-15.6L142,301.471z" />
                                        <path
                                            d="M251,350.271v91c0,4.8,3.9,8.8,8.8,8.8h61c4.8,0,8.8-3.9,8.8-8.8v-167.9l-69.9,69.9    C257,345.971,254.1,348.271,251,350.271z" />
                                        <path
                                            d="M432.7,170.171l-72.7,72.7v198.4c0,4.8,3.9,8.8,8.8,8.8h61c4.8,0,8.8-3.9,8.8-8.8v-265.6c-2-1.7-3.5-3.2-4.6-4.2    L432.7,170.171z" />
                                        <path
                                            d="M482.6,41.371c-2.9-3.1-7.3-4.7-12.9-4.7c-0.5,0-1.1,0-1.6,0c-28.4,1.3-56.7,2.7-85.1,4c-3.8,0.2-9,0.4-13.1,4.5    c-1.3,1.3-2.3,2.8-3.1,4.6c-4.2,9.1,1.7,15,4.5,17.8l7.1,7.2c4.9,5,9.9,10,14.9,14.9l-171.6,171.7l-77.1-77.1    c-4.6-4.6-10.8-7.2-17.4-7.2c-6.6,0-12.7,2.6-17.3,7.2L7.2,286.871c-9.6,9.6-9.6,25.1,0,34.7l4.6,4.6c4.6,4.6,10.8,7.2,17.4,7.2    s12.7-2.6,17.3-7.2l80.7-80.7l77.1,77.1c4.6,4.6,10.8,7.2,17.4,7.2c6.6,0,12.7-2.6,17.4-7.2l193.6-193.6l21.9,21.8    c2.6,2.6,6.2,6.2,11.7,6.2c2.3,0,4.6-0.6,7-1.9c1.6-0.9,3-1.9,4.2-3.1c4.3-4.3,5.1-9.8,5.3-14.1c0.8-18.4,1.7-36.8,2.6-55.3    l1.3-27.7C487,49.071,485.7,44.571,482.6,41.371z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="text-lg py-1">Transactions</span>
                    </button>
                </div>
                <div class="flex flex-col">
                    <button
                        class="w-full cursor-pointer py-1 px-4 mb-1 flex items-center justify-start hover:bg-[#0000004c]">
                        <div class="w-[40px]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                        </div>
                        <span class="text-lg py-1">Customers</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>