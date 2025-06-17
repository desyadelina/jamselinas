<!-- mobile menu button -->
<button id="mobileSidebarToggle"
    class="lg:hidden fixed top-4 left-4 z-0 p-2 bg-jamselinas-primary text-white rounded-lg shadow-lg">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
</button>

<!-- mobile overlay -->
<div id="mobileOverlay" class="lg:hidden fixed inset-0 bg-black/50 z-30 hidden"></div>

<!-- sisdebarnya -->
<nav class="fixed lg:static inset-y-0 left-0 z-40 w-64 lg:w-72 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out"
    id="sidebar" role="navigation" aria-label="Main navigation">

    <div class="flex flex-col h-full bg-[#E2EFF6] border-r border-jamselinas-gradient-mid shadow-lg">

        <!-- header section -->
        <header class="flex items-center px-4 py-6 border-b border-jamselinas-gradient-mid/30">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/small_nobg_logo.png') }}" alt="Jamselinas Logo"
                    class="w-23 h-23 object-contain flex-shrink-0" />
                <div class="flex flex-col">
                    <h1 class="text-lg font-semibold text-jamselinas-text font-poppins">Jamselinas</h1>
                    <p class="text-sm text-jamselinas-secondary font-inter">Banjarmasin</p>
                </div>
            </div>

            <!-- close button buat mobile -->
            <button id="closeSidebar" class="lg:hidden ml-auto p-2 text-jamselinas-text hover:bg-[#E2EFF6] rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </header>

        <div class="px-4 py-3">
            <div class="bg-jamselinas-primary/10 border border-jamselinas-primary/20 rounded-lg px-3 py-2">
                <p class="text-sm font-medium text-jamselinas-primary text-center font-inter">Admin Panel</p>
            </div>
        </div>

        <!-- navmenu -->
        <nav class="flex-1 px-4 py-2 overflow-y-auto" role="menu">
            <div class="space-y-1">

                <!-- dashboard -->
                <a href="{{ route('admin.dashboard') }}"
                    class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-jamselinas-primary text-white shadow-md' : 'text-jamselinas-text hover:bg-[#bad2df] hover:text-jamselinas-primary' }}"
                    role="menuitem" @if (request()->routeIs('admin.dashboard')) aria-current="page" @endif>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-5 h-5 mr-3 flex-shrink-0"
                        fill="currentColor">
                        <path
                            d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z" />
                    </svg>
                    <span class="truncate">Dashboard</span>
                </a>

                <!-- data management section -->
                <div class="pt-4">
                    <p
                        class="px-3 text-xs font-semibold text-jamselinas-secondary uppercase tracking-wider mb-2 font-inter">
                        Data Management</p>

                    <a href="#data-panitia"
                        class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-jamselinas-text hover:bg-[#bad2df] hover:text-jamselinas-primary"
                        role="menuitem">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                            class="w-5 h-5 mr-3 flex-shrink-0" fill="currentColor">
                            <path
                                d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                        </svg>
                        <span class="truncate">Data Panitia</span>
                    </a>

                    <a href="#data-sponsor"
                        class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-jamselinas-text hover:bg-[#bad2df] hover:text-jamselinas-primary"
                        role="menuitem">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            id="Business-Handshake-Deal--Streamline-Cyber" class="w-5 h-5 mr-3 flex-shrink-0">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10"
                                d="M14.5 10.5 9.934 12 9 11.066 13.132 7.5H15L18 9l2.5 0.5V16l-2 0.5h-4.626"
                                stroke-width="1.5"></path>
                            <path stroke="currentColor" stroke-linejoin="round" stroke-miterlimit="10"
                                d="m3.5 15 2.597 0.5 3.952 3.951 1.709 -0.294 0.294 -1.709 1.709 -0.295 0.295 -1.709 1.708 -0.294 0.295 -1.709 -2.599 -2.599"
                                stroke-width="1.5"></path>
                            <path stroke="currentColor" stroke-linejoin="round" stroke-miterlimit="10"
                                d="M11.514 8.896 9.618 7 6 8.5 3.5 9" stroke-width="1.5"></path>
                            <path stroke="currentColor" stroke-linejoin="round" stroke-miterlimit="10"
                                d="M3.5 7.5h-3v9h3v-9Z" stroke-width="1.5"></path>
                            <path stroke="currentColor" stroke-linejoin="round" stroke-miterlimit="10"
                                d="M23.5 8.5h-3v9h3v-9Z" stroke-width="1.5"></path>
                        </svg>
                        <span class="truncate">Data Sponsor</span>
                    </a>

                    <a href="#data-checkpoint"
                        class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-jamselinas-text hover:bg-[#bad2df] hover:text-jamselinas-primary"
                        role="menuitem">
                        <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 512 512" class="w-5 h-5 mr-3 flex-shrink-0">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32">
                                <path
                                    d="m256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0 0 25.5 0c35.25-47.6 131.25-185.42 131.25-272.49 0-75.61-64.5-137-144-137z" />
                                <circle cx="256" cy="192" r="48" />
                            </g>
                        </svg>
                        <span class="truncate">Check Point</span>
                    </a>
                </div>

                <!-- partisipan section -->
                <div class="pt-4">
                    <p
                        class="px-3 text-xs font-semibold text-jamselinas-secondary uppercase tracking-wider mb-2 font-inter">
                        Peserta</p>

                    <a href="{{ route('admin.peserta-kolektif') }}"
                        class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 {{ request()->routeIs('admin.peserta-kolektif') ? 'bg-jamselinas-primary text-white shadow-md' : 'text-jamselinas-text hover:bg-[#bad2df] hover:text-jamselinas-primary' }}"
                        role="menuitem" @if (request()->routeIs('admin.peserta-kolektif')) aria-current="page" @endif>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                            class="w-5 h-5 mr-3 flex-shrink-0" fill="currentColor">
                            <path
                                d="M0-240v-63q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780Zm-455-80h311q-10-20-55.5-35T480-370q-55 0-100.5 15T325-320ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560Zm1 240Zm-1-280Z" />
                        </svg>
                        <span class="truncate">Peserta Kolektif</span>
                    </a>

                    <a href="#peserta-umum"
                        class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-jamselinas-text hover:bg-[#bad2df] hover:text-jamselinas-primary"
                        role="menuitem">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                            class="w-5 h-5 mr-3 flex-shrink-0" fill="currentColor">
                            <path
                                d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                        </svg>
                        <span class="truncate">Peserta Umum</span>
                    </a>
                </div>

                <!-- communication section -->
                <div class="pt-4">
                    <p
                        class="px-3 text-xs font-semibold text-jamselinas-secondary uppercase tracking-wider mb-2 font-inter">
                        Komunikasi</p>

                    <a href="#notifikasi"
                        class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-jamselinas-text hover:bg-[#bad2df] hover:text-jamselinas-primary"
                        role="menuitem">
                        <svg xmlns="http://www.w3.org/2000/svg" id="icon" class="w-5 h-5 mr-3 flex-shrink-0"
                            viewBox="0 0 32 32" fill="currentColor">
                            <path
                                d="M28.7071,19.293,26,16.5859V13a10.0136,10.0136,0,0,0-9-9.9492V1H15V3.0508A10.0136,10.0136,0,0,0,6,13v3.5859L3.2929,19.293A1,1,0,0,0,3,20v3a1,1,0,0,0,1,1h7v.7768a5.152,5.152,0,0,0,4.5,5.1987A5.0057,5.0057,0,0,0,21,25V24h7a1,1,0,0,0,1-1V20A1,1,0,0,0,28.7071,19.293ZM19,25a3,3,0,0,1-6,0V24h6Zm8-3H5V20.4141L7.707,17.707A1,1,0,0,0,8,17V13a8,8,0,0,1,16,0v4a1,1,0,0,0,.293.707L27,20.4141Z" />
                            <rect width="32" height="32" fill="none" />
                        </svg>
                        <span class="truncate">Notifikasi</span>
                        <span class="ml-auto bg-red-500 text-white text-xs rounded-full px-2 py-0.5">3</span>
                    </a>

                    <a href="#laporan"
                        class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-jamselinas-text hover:bg-[#bad2df] hover:text-jamselinas-primary"
                        role="menuitem">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="truncate">Laporan</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- footer section -->
        <div class="px-4 py-4 border-t border-jamselinas-gradient-mid/30">
            <a href="#keluar"
                class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-white bg-red-700 border border-transparent hover:bg-transparent hover:border-red-700 hover:text-red-700 focus:bg-transparent focus:border-red-700 focus:text-red-700 active:bg-transparent active:border-red-700 active:text-red-700"
                role="menuitem">
                <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span class="truncate">Keluar</span>
            </a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // mobile sidebar elements
        const mobileSidebarToggle = document.getElementById('mobileSidebarToggle');
        const closeSidebar = document.getElementById('closeSidebar');
        const sidebar = document.getElementById('sidebar');
        const mobileOverlay = document.getElementById('mobileOverlay');

        // function buat open sidebar
        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            mobileOverlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        // function buat close sidebar
        function closeSidebarFunc() {
            sidebar.classList.add('-translate-x-full');
            mobileOverlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        // event listeners for mobile
        if (mobileSidebarToggle) {
            mobileSidebarToggle.addEventListener('click', openSidebar);
        }

        if (closeSidebar) {
            closeSidebar.addEventListener('click', closeSidebarFunc);
        }

        if (mobileOverlay) {
            mobileOverlay.addEventListener('click', closeSidebarFunc);
        }

        // tutup sidebar on window resize to desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) {
                closeSidebarFunc();
            }
        });

        // keyboard navigation for menu items
        const menuItems = document.querySelectorAll('nav[role="menu"] a');
        menuItems.forEach(item => {
            item.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });

        // nav functionality
        document.querySelectorAll('nav[role="menu"] a').forEach(link => {
            link.addEventListener('click', function(e) {
                // hanya ngeprevent default buat non-route links (starting with #)
                if (this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();

                    // remove active state from all menu items
                    document.querySelectorAll('nav[role="menu"] a').forEach(item => {
                        item.classList.remove('bg-jamselinas-primary', 'text-white',
                            'shadow-md');
                        item.classList.add('text-jamselinas-text', 'hover:bg-[#bad2df]',
                            'hover:text-jamselinas-primary');
                        item.removeAttribute('aria-current');
                    });

                    // add active state to clicked item
                    this.classList.remove('text-jamselinas-text', 'hover:bg-[#bad2df]',
                        'hover:text-jamselinas-primary');
                    this.classList.add('bg-jamselinas-primary', 'text-white', 'shadow-md');
                    this.setAttribute('aria-current', 'page');

                    // close mobile sidebar after navigation
                    if (window.innerWidth < 1024) {
                        closeSidebarFunc();
                    }

                    alert(`Navigating to: ${this.textContent.trim()}`);
                }
                // buat routes sebenarnya, let em navigate normally
            });
        });

        // auto-close mobile sidebar ketika clicking menu items
        const mobileMenuItems = document.querySelectorAll('nav[role="menu"] a[href^="/"]');
        mobileMenuItems.forEach(item => {
            item.addEventListener('click', function() {
                if (window.innerWidth < 1024) {
                    setTimeout(closeSidebarFunc, 150);
                }
            });
        });
    });
</script>
