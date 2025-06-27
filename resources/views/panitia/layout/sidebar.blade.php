<!-- start sidebar -->
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{url('/panitia')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100">
                    <i class="fa-solid fa-house text-xl text-black group:text-slate-800"></i>
                    <span class="ml-3 group:text-slate-800">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-lomba" data-collapse-toggle="dropdown-lomba">
                    <i class="fa-solid fa-users text-black text-xl"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Peserta Lomba</span>
                    <svg sidebar-toggle-item class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-lomba" class="py-2 space-y-2 hidden">
                    <li>
                        <a href="{{url('/dc-panitia')}}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">DC</a>
                    </li>
                    <li>
                        <a href="{{url('/wdc-panitia')}}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">WDC</a>
                    </li>
                    <li>
                        <a href="{{url('/ctf-panitia')}}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">CTF</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('/chilltalk-panitia')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-microphone-lines text-xl text-black"></i>                
                    <span class="ml-3">Peserta ChillTalks</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-project" data-collapse-toggle="dropdown-project">
                    <i class="fa-solid fa-flag-checkered text-black text-xl"></i>                  
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Project</span>
                    <svg sidebar-toggle-item class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"> 
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-project" class="py-2 space-y-2 hidden">
                    <li>
                        <a href="{{url('/project-panitia-dc')}}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">DC</a>
                    </li>
                    <li>
                        <a href="{{url('/project-panitia-wdc')}}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">WDC</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-transaksi" data-collapse-toggle="dropdown-transaksi">
                    <i class="fa-solid fa-money-bills text-black"></i>                  
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Data Transaksi</span>
                    <svg sidebar-toggle-item class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"> 
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-transaksi" class="py-2 space-y-2 hidden">
                    <li>
                        <a href="{{url('/panitia-transaksi-dc')}}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">DC</a>
                    </li>
                    <li>
                        <a href="{{url('/panitia-transaksi-wdc')}}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">WDC</a>
                    </li>
                    <li>
                        <a href="{{url('/panitia-transaksi-ctf')}}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">CTF</a>
                    </li>
                    <li>
                        <a href="{{url('/panitia-transaksi-ct')}}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">ChillTalks</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
<!-- end sidebar -->