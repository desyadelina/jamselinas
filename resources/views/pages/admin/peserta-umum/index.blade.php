@extends('layouts.admin')

@section('title', 'Data Peserta Umum - JAMSELINAS XIV 2025')

@section('content')
    @php
        $pesertaData = [
            [
                'no' => 1,
                'reg' => '0012980',
                'email' => 'raden.aditya@email.com',
                'nama' => 'Raden Aditya Prasetya',
                'nik' => '6371021234567890',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Banjarmasin',
                'tanggal_lahir' => '1990-05-15',
                'kewarganegaraan' => 'Indonesia',
                'provinsi' => 'Kalimantan Selatan',
                'kota' => 'Banjarmasin',
                'alamat' => 'Jl. Veteran No. 123, Banjarmasin',
                'kode_pos' => '70234',
                'no_wa' => '+6281234567890',
                'no_darurat' => '+6281234567891',
                'gol_darah' => 'A',
                'jenis_sepeda' => 'Folding Bike',
                'instagram' => '@raden_aditya',
                'ukuran_jersey' => 'L',
                'kaos_katun' => 'L',
                'jumlah_kaos' => '2',
                'komunitas' => 'Sepeda Seli BJM',
                'model_sepeda' => 'Brompton',
                'status' => 'Belum Bayar',
                'bukti_pembayaran' => null,
                'created_at' => '2025-01-15 10:30:00',
            ],
            [
                'no' => 2,
                'reg' => '0012981',
                'email' => 'siti.nurhaliza@email.com',
                'nama' => 'Siti Nurhaliza',
                'nik' => '6371022345678901',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Banjarbaru',
                'tanggal_lahir' => '1992-08-20',
                'kewarganegaraan' => 'Indonesia',
                'provinsi' => 'Kalimantan Selatan',
                'kota' => 'Banjarbaru',
                'alamat' => 'Jl. A. Yani Km 5, Banjarbaru',
                'kode_pos' => '70714',
                'no_wa' => '+6281234567892',
                'no_darurat' => '+6281234567893',
                'gol_darah' => 'B',
                'jenis_sepeda' => 'Folding Bike',
                'instagram' => '@siti_nurhaliza',
                'ukuran_jersey' => 'M',
                'kaos_katun' => 'S',
                'jumlah_kaos' => '1',
                'komunitas' => 'BJM Folding Community',
                'model_sepeda' => 'Dahon',
                'status' => 'Menunggu Verifikasi',
                'bukti_pembayaran' => 'bukti_pembayaran_001.jpg',
                'created_at' => '2025-01-15 11:15:00',
            ],
            [
                'no' => 3,
                'reg' => '0012982',
                'email' => 'ahmad.fauzi@email.com',
                'nama' => 'Ahmad Fauzi Rahman',
                'nik' => '6371023456789012',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Martapura',
                'tanggal_lahir' => '1985-12-10',
                'kewarganegaraan' => 'Indonesia',
                'provinsi' => 'Kalimantan Selatan',
                'kota' => 'Banjar',
                'alamat' => 'Jl. Pasar Lama No. 45, Martapura',
                'kode_pos' => '70714',
                'no_wa' => '+6281234567894',
                'no_darurat' => '+6281234567895',
                'gol_darah' => 'O',
                'jenis_sepeda' => 'Folding Bike',
                'instagram' => '@ahmad_fauzi',
                'ukuran_jersey' => 'XL',
                'kaos_katun' => 'L',
                'jumlah_kaos' => '3',
                'komunitas' => 'Martapura Cycling Club',
                'model_sepeda' => 'Tern',
                'status' => 'Lunas',
                'bukti_pembayaran' => 'bukti_pembayaran_002.jpg',
                'created_at' => '2025-01-15 09:45:00',
            ],
        ];
    @endphp

    <div class="flex flex-col mt-6 lg:mt-20 px-4 lg:px-0">
        <!-- breadcrumb -->
        <nav aria-label="Breadcrumb" class="mb-6">
            <ol class="flex items-center space-x-2 text-sm lg:text-lg">
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                        class="text-jamselinas-secondary hover:text-jamselinas-primary transition-colors">Dashboard</a>
                </li>
                <li class="text-gray-400">/</li>
                <li aria-current="page" class="text-gray-600">Data Peserta Umum</li>
            </ol>
        </nav>

        <!-- main card -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-4 lg:p-8">
            <!-- header -->
            <div class="mb-6 lg:mb-8">
                <h1 class="text-2xl lg:text-4xl font-semibold text-jamselinas-text mb-2">Data Peserta Umum</h1>
                <p class="text-gray-600 text-sm lg:text-base">Kelola data peserta umum JAMSELINAS XIV 2025</p>
            </div>

            <!-- actions bar -->
            <div class="flex flex-col lg:flex-row gap-4 lg:gap-6 justify-between mb-6">
                <!-- left actions -->
                <div class="flex flex-col sm:flex-row gap-3">
                    <button onclick="exportData()"
                        class="flex items-center justify-center gap-2 px-4 py-2.5 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-all duration-200 shadow-md hover:shadow-lg font-medium text-sm lg:text-base">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Export Data
                    </button>
                </div>

                <!-- search -->
                <div class="flex flex-col sm:flex-row gap-3">
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Cari Peserta, Email, No Reg..."
                            class="pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-jamselinas-secondary focus:border-jamselinas-secondary w-full sm:w-64 text-sm">
                        <svg class="absolute left-3 top-3 w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- mobile card view -->
            <div class="block lg:hidden space-y-3" id="mobileView">
                @foreach ($pesertaData as $peserta)
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 search-item"
                        data-searchable="{{ strtolower($peserta['nama'] . ' ' . $peserta['email'] . ' ' . $peserta['reg'] . ' ' . $peserta['komunitas']) }}">
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <h3 class="font-semibold text-jamselinas-text">{{ $peserta['nama'] }}</h3>
                                <p class="text-sm text-gray-600 font-mono">{{ $peserta['reg'] }}</p>
                                <p class="text-sm text-gray-600">{{ $peserta['email'] }}</p>
                            </div>
                            <div class="flex gap-1">
                                <button onclick="lihatDetail('{{ $peserta['reg'] }}')"
                                    class="p-2 text-jamselinas-secondary hover:bg-jamselinas-secondary hover:text-white rounded-lg transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                <button onclick="editData('{{ $peserta['reg'] }}')"
                                    class="p-2 text-green-600 hover:bg-green-100 rounded-lg transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button onclick="hapusData('{{ $peserta['reg'] }}', '{{ $peserta['nama'] }}')"
                                    class="p-2 text-red-600 hover:bg-red-100 rounded-lg transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mb-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-jamselinas-gradient-mid text-jamselinas-text">
                                {{ $peserta['komunitas'] }}
                            </span>
                            @if ($peserta['status'] === 'Lunas')
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    {{ $peserta['status'] }}
                                </span>
                            @elseif($peserta['status'] === 'Menunggu Verifikasi')
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    {{ $peserta['status'] }}
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    {{ $peserta['status'] }}
                                </span>
                            @endif
                        </div>
                        <div class="text-xs text-gray-500 space-y-1">
                            <p>NIK: {{ $peserta['nik'] }}</p>
                            <p>{{ $peserta['jenis_kelamin'] }} | {{ $peserta['tempat_lahir'] }},
                                {{ $peserta['tanggal_lahir'] }}</p>
                            <p>WA: {{ $peserta['no_wa'] }}</p>
                            <p>Jersey: {{ $peserta['ukuran_jersey'] }}</p>
                        </div>
                        @if ($peserta['bukti_pembayaran'])
                            <div class="mt-3 pt-3 border-t border-gray-200">
                                <button onclick="lihatBukti('{{ $peserta['bukti_pembayaran'] }}')"
                                    class="w-full px-3 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition-colors">
                                    Lihat Bukti Pembayaran
                                </button>
                                @if ($peserta['status'] === 'Menunggu Verifikasi')
                                    <button onclick="approvePayment('{{ $peserta['reg'] }}')"
                                        class="w-full mt-2 px-3 py-2 bg-green-600 text-white text-sm rounded-lg hover:bg-green-700 transition-colors">
                                        Approve Pembayaran
                                    </button>
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

            <!-- desktop table view -->
            <div class="hidden lg:block overflow-x-auto rounded-lg border border-gray-200" id="desktopView">
                <table class="w-full divide-y divide-gray-200">
                    <thead class="bg-jamselinas-secondary">
                        <tr>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider">
                                No Reg</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider">
                                Nama Lengkap</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider">
                                Email</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider">
                                Komunitas</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider">
                                Jersey</th>
                            <th scope="col"
                                class="px-4 py-4 text-center text-sm font-semibold text-white uppercase tracking-wider">
                                Status</th>
                            <th scope="col"
                                class="px-4 py-4 text-center text-sm font-semibold text-white uppercase tracking-wider">
                                Bukti</th>
                            <th scope="col"
                                class="px-4 py-4 text-center text-sm font-semibold text-white uppercase tracking-wider">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($pesertaData as $peserta)
                            <tr class="hover:bg-gray-50 transition-colors search-item"
                                data-searchable="{{ strtolower($peserta['nama'] . ' ' . $peserta['email'] . ' ' . $peserta['reg'] . ' ' . $peserta['komunitas']) }}">
                                <td class="px-4 py-4 text-sm font-mono text-jamselinas-text font-semibold">
                                    {{ $peserta['reg'] }}
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $peserta['nama'] }}</div>
                                    <div class="text-sm text-gray-500">{{ $peserta['jenis_kelamin'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900">{{ $peserta['email'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-1 rounded-full text-sm font-medium bg-jamselinas-gradient-mid text-jamselinas-text">
                                        {{ $peserta['komunitas'] }}
                                    </span>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900">{{ $peserta['ukuran_jersey'] }}</div>
                                </td>
                                <td class="px-4 py-4 text-center">
                                    @if ($peserta['status'] === 'Lunas')
                                        <span
                                            class="inline-flex items-center px-2.5 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                            {{ $peserta['status'] }}
                                        </span>
                                    @elseif($peserta['status'] === 'Menunggu Verifikasi')
                                        <span
                                            class="inline-flex items-center px-2.5 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                                            {{ $peserta['status'] }}
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-2.5 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                            {{ $peserta['status'] }}
                                        </span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-center">
                                    @if ($peserta['bukti_pembayaran'])
                                        <button onclick="lihatBukti('{{ $peserta['bukti_pembayaran'] }}')"
                                            class="text-blue-600 hover:text-blue-900 font-medium text-sm">
                                            Lihat Bukti
                                        </button>
                                    @else
                                        <span class="text-gray-400 text-sm">Belum ada</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <button onclick="lihatDetail('{{ $peserta['reg'] }}')"
                                            class="p-2 text-jamselinas-secondary hover:bg-jamselinas-secondary hover:text-white rounded-lg transition-colors"
                                            title="Lihat Detail">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </button>
                                        @if ($peserta['status'] === 'Menunggu Verifikasi')
                                            <button onclick="approvePayment('{{ $peserta['reg'] }}')"
                                                class="p-2 text-green-600 hover:bg-green-100 rounded-lg transition-colors"
                                                title="Approve Pembayaran">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                            </button>
                                        @endif
                                        <button onclick="editData('{{ $peserta['reg'] }}')"
                                            class="p-2 text-green-600 hover:bg-green-100 rounded-lg transition-colors"
                                            title="Edit Data">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </button>
                                        <button onclick="hapusData('{{ $peserta['reg'] }}', '{{ $peserta['nama'] }}')"
                                            class="p-2 text-red-600 hover:bg-red-100 rounded-lg transition-colors"
                                            title="Hapus Data">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- pagination -->
            <div class="flex flex-col sm:flex-row justify-between items-center mt-6 gap-4" id="paginationContainer">
                <div class="text-sm text-gray-600" id="paginationInfo">
                    Showing <span id="currentStart">1</span> to <span id="currentEnd">3</span> of <span
                        id="totalItems">3</span> entries
                </div>
                <nav class="flex items-center gap-2" id="paginationNav">
                    <button onclick="previousPage()" id="prevPage"
                        class="px-4 py-2 text-sm text-gray-500 hover:text-jamselinas-secondary border border-gray-300 rounded-lg hover:border-jamselinas-secondary transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
                        disabled>
                        Previous
                    </button>
                    <div id="pageNumbers" class="flex gap-1">
                        <button class="px-3 py-2 text-sm text-white bg-jamselinas-secondary rounded-lg">1</button>
                    </div>
                    <button onclick="nextPage()" id="nextPage"
                        class="px-4 py-2 text-sm text-gray-500 hover:text-jamselinas-secondary border border-gray-300 rounded-lg hover:border-jamselinas-secondary transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
                        disabled>
                        Next
                    </button>
                </nav>
            </div>
        </div>
    </div>

    <!-- bukti pembayaran modal -->
    <div id="buktiModal" class="fixed inset-0 backdrop-blur-sm bg-black/50  z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-jamselinas-text">Bukti Pembayaran</h3>
                    <button onclick="closeBuktiModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <div class="text-center">
                    <img id="buktiImage" src="" alt="Bukti Pembayaran"
                        class="max-w-full h-auto rounded-lg shadow-lg">
                </div>
                <div class="mt-6 flex justify-center space-x-4">
                    <button onclick="approveFromModal()"
                        class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                        Approve Pembayaran
                    </button>
                    <button onclick="rejectFromModal()"
                        class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                        Tolak Pembayaran
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let currentPage = 1;
        let itemsPerPage = 10;
        let filteredItems = [];
        let allItems = [];
        let currentBuktiReg = '';

        document.addEventListener('DOMContentLoaded', function() {
            // initialize data
            initializeData();

            // search functionality
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', function() {
                performSearch(this.value);
            });
        });

        function initializeData() {
            const mobileItems = Array.from(document.querySelectorAll('#mobileView .search-item'));
            const desktopItems = Array.from(document.querySelectorAll('#desktopView .search-item'));
            allItems = desktopItems.length > 0 ? desktopItems : mobileItems;
            filteredItems = [...allItems];
            updatePagination();
        }

        function performSearch(searchTerm) {
            const term = searchTerm.toLowerCase().trim();
            const mobileItems = Array.from(document.querySelectorAll('#mobileView .search-item'));
            const desktopItems = Array.from(document.querySelectorAll('#desktopView .search-item'));

            let matchedCount = 0;

            if (term === '') {
                // show all items
                [...mobileItems, ...desktopItems].forEach(item => {
                    item.style.display = '';
                });
                matchedCount = allItems.length;
            } else {
                // filter items
                [...mobileItems, ...desktopItems].forEach(item => {
                    const searchText = item.dataset.searchable;
                    if (searchText && searchText.includes(term)) {
                        item.style.display = '';
                        matchedCount++;
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            // update filtered items for pagination
            filteredItems = allItems.filter(item => {
                const searchText = item.dataset.searchable;
                return term === '' || (searchText && searchText.includes(term));
            });

            currentPage = 1;
            updatePagination();
        }

        function updatePagination() {
            const totalItems = filteredItems.length;
            const totalPages = Math.ceil(totalItems / itemsPerPage);

            const currentStart = totalItems > 0 ? ((currentPage - 1) * itemsPerPage) + 1 : 0;
            const currentEnd = Math.min(currentPage * itemsPerPage, totalItems);

            document.getElementById('currentStart').textContent = currentStart;
            document.getElementById('currentEnd').textContent = currentEnd;
            document.getElementById('totalItems').textContent = totalItems;

            const prevPage = document.getElementById('prevPage');
            const nextPage = document.getElementById('nextPage');

            prevPage.disabled = currentPage === 1;
            nextPage.disabled = currentPage === totalPages || totalPages === 0;

            updatePageNumbers(totalPages);

            const paginationContainer = document.getElementById('paginationContainer');
            paginationContainer.style.display = totalItems > 0 ? 'flex' : 'none';
        }

        function updatePageNumbers(totalPages) {
            const pageNumbers = document.getElementById('pageNumbers');
            pageNumbers.innerHTML = '';

            const maxVisiblePages = 5;
            let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
            let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

            if (endPage - startPage + 1 < maxVisiblePages) {
                startPage = Math.max(1, endPage - maxVisiblePages + 1);
            }

            for (let i = startPage; i <= endPage; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                button.className = i === currentPage ?
                    'px-3 py-2 text-sm text-white bg-jamselinas-secondary rounded-lg' :
                    'px-3 py-2 text-sm text-gray-500 hover:text-jamselinas-secondary border border-gray-300 rounded-lg hover:border-jamselinas-secondary transition-colors';
                button.onclick = () => goToPage(i);
                pageNumbers.appendChild(button);
            }
        }

        function goToPage(page) {
            const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
            if (page >= 1 && page <= totalPages) {
                currentPage = page;
                updatePagination();
            }
        }

        function previousPage() {
            if (currentPage > 1) {
                currentPage--;
                updatePagination();
            }
        }

        function nextPage() {
            const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                updatePagination();
            }
        }

        function lihatDetail(regNo) {
            alert(`Melihat detail peserta dengan nomor registrasi: ${regNo}`);
            // implement detail view logic here
        }

        function lihatBukti(fileName) {
            currentBuktiReg = fileName;
            document.getElementById('buktiImage').src = `/storage/bukti-pembayaran/${fileName}`;
            document.getElementById('buktiModal').classList.remove('hidden');
            document.getElementById('buktiModal').classList.add('flex');
        }

        function closeBuktiModal() {
            document.getElementById('buktiModal').classList.add('hidden');
            document.getElementById('buktiModal').classList.remove('flex');
            currentBuktiReg = '';
        }

        function approvePayment(regNo) {
            if (confirm(`Apakah Anda yakin ingin menyetujui pembayaran untuk peserta ${regNo}?`)) {
                alert(`Pembayaran untuk peserta ${regNo} telah disetujui`);
                // implement approve logic here
                location.reload();
            }
        }

        function approveFromModal() {
            if (confirm('Apakah Anda yakin ingin menyetujui pembayaran ini?')) {
                alert('Pembayaran telah disetujui');
                closeBuktiModal();
                location.reload();
            }
        }

        function rejectFromModal() {
            if (confirm('Apakah Anda yakin ingin menolak pembayaran ini?')) {
                alert('Pembayaran telah ditolak');
                closeBuktiModal();
                location.reload();
            }
        }

        function editData(regNo) {
            alert(`Mengedit data peserta dengan nomor registrasi: ${regNo}`);
            // implement edit logic here
        }

        function hapusData(regNo, nama) {
            if (confirm(`Apakah Anda yakin ingin menghapus data peserta ${nama} (${regNo})?`)) {
                alert(`Data peserta ${nama} telah dihapus`);
                // implement delete logic here
                location.reload();
            }
        }

        function exportData() {
            alert('Mengekspor data ke Excel...');
            // implement export logic here
        }

        // close modal when clicking outside
        document.addEventListener('click', function(event) {
            const buktiModal = document.getElementById('buktiModal');
            if (event.target === buktiModal) {
                closeBuktiModal();
            }
        });
    </script>
@endpush
