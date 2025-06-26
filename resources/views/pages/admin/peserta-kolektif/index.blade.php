@extends('layouts.admin')

@section('title', 'Data Peserta Kolektif - JAMSELINAS XIV 2025')

@section('content')
    @php
        $pesertaData = [
            [
                'no' => 1,
                'reg' => '0012980',
                'nama' => 'Raden Aditya Prasetya',
                'email' => 'raden.aditya@email.com',
                'nik' => '6371021234567890',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Banjarmasin',
                'tanggal_lahir' => '1990-05-15',
                'alamat' => 'Jl. Veteran No. 123, Banjarmasin',
                'gol_darah' => 'A',
                'penyakit_bawaan' => 'Tidak ada',
                'no_wa' => '+6281234567890',
                'no_darurat' => '+6281234567891',
                'hubungan_darurat' => 'Istri',
                'komunitas' => 'Sepeda Seli BJM',
                'ukuran_jersey' => 'L',
                'status' => 'Lunas',
            ],
            [
                'no' => 2,
                'reg' => '0012909',
                'nama' => 'Siti Nurhaliza Wulandari',
                'email' => 'siti.nurhaliza@email.com',
                'nik' => '6371022345678901',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Martapura',
                'tanggal_lahir' => '1992-08-20',
                'alamat' => 'Jl. Ahmad Yani No. 456, Martapura',
                'gol_darah' => 'B',
                'penyakit_bawaan' => 'Asma ringan',
                'no_wa' => '+6281234567892',
                'no_darurat' => '+6281234567893',
                'hubungan_darurat' => 'Suami',
                'komunitas' => 'Gowes Kalsel',
                'ukuran_jersey' => 'M',
                'status' => 'Lunas',
            ],
            [
                'no' => 3,
                'reg' => '0012001',
                'nama' => 'Bagus Dwi Saputro',
                'email' => 'bagus.dwi@email.com',
                'nik' => '6371023456789012',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Banjarbaru',
                'tanggal_lahir' => '1988-12-10',
                'alamat' => 'Jl. Pangeran Antasari No. 789, Banjarbaru',
                'gol_darah' => 'O',
                'penyakit_bawaan' => 'Tidak ada',
                'no_wa' => '+6281234567894',
                'no_darurat' => '+6281234567895',
                'hubungan_darurat' => 'Ayah',
                'komunitas' => 'Folding Bike Banjar',
                'ukuran_jersey' => 'XL',
                'status' => 'Belum Bayar',
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
                <li aria-current="page" class="text-gray-600">Data Peserta Kolektif</li>
            </ol>
        </nav>

        <!-- main card -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-4 lg:p-8">
            <!-- header -->
            <div class="mb-6 lg:mb-8">
                <h1 class="text-2xl lg:text-4xl font-semibold text-jamselinas-text mb-2">Data Peserta Kolektif</h1>
                <p class="text-gray-600 text-sm lg:text-base">Kelola data peserta yang mendaftar secara kolektif</p>
            </div>

            <!-- actions bar -->
            <div class="flex flex-col lg:flex-row gap-4 lg:gap-6 justify-between mb-6">
                <!-- left actions -->
                <div class="flex flex-col sm:flex-row gap-3">
                    <!-- file input hidden untuk upload excel -->
                    <input type="file" id="excelFileInput" accept=".xlsx,.xls" class="hidden"
                        onchange="handleExcelUpload(event)">

                    <button onclick="triggerExcelUpload()"
                        class="flex items-center justify-center gap-2 px-4 py-2.5 bg-jamselinas-secondary text-white rounded-lg hover:bg-jamselinas-primary transition-all duration-200 shadow-md hover:shadow-lg font-medium text-sm lg:text-base">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                        </svg>
                        Tambah Data
                    </button>

                    <button onclick="exportData()"
                        class="flex items-center justify-center gap-2 px-4 py-2.5 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-all duration-200 shadow-md hover:shadow-lg font-medium text-sm lg:text-base">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Export Data
                    </button>
                </div>

                <!-- search & bulk actions -->
                <div class="flex flex-col sm:flex-row gap-3">
                    <!-- bulk actions -->
                    <div id="bulkActions" class="hidden flex-row gap-2">
                        <button onclick="uploadBulkPayment()"
                            class="flex items-center justify-center gap-2 px-4 py-2.5 bg-jamselinas-secondary text-white rounded-lg hover:bg-jamselinas-primary transition-all duration-200 shadow-md hover:shadow-lg font-medium text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                            </svg>
                            Upload Bukti (<span id="selectedCount">0</span>)
                        </button>
                    </div>

                    <!-- search -->
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Cari Peserta, Komunitas, NIK..."
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
                        data-community="{{ $peserta['komunitas'] }}" data-name="{{ $peserta['nama'] }}"
                        data-nik="{{ $peserta['nik'] }}" data-email="{{ $peserta['email'] }}">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex items-center gap-3">
                                <input type="checkbox"
                                    class="participant-checkbox rounded border-gray-300 text-jamselinas-secondary focus:ring-jamselinas-secondary"
                                    value="{{ $peserta['reg'] }}" data-community="{{ $peserta['komunitas'] }}"
                                    data-name="{{ $peserta['nama'] }}">
                                <div>
                                    <h3 class="font-semibold text-jamselinas-text">{{ $peserta['nama'] }}</h3>
                                    <p class="text-sm text-gray-600 font-mono">{{ $peserta['reg'] }}</p>
                                    <p class="text-sm text-gray-600">{{ $peserta['email'] }}</p>
                                </div>
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
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                {{ $peserta['status'] === 'Lunas' ? 'bg-green-100 text-green-800' : 'bg-orange-100 text-orange-800' }}">
                                {{ $peserta['status'] }}
                            </span>
                        </div>
                        <div class="text-xs text-gray-500 space-y-1">
                            <p>NIK: {{ $peserta['nik'] }}</p>
                            <p>{{ $peserta['jenis_kelamin'] }} | {{ $peserta['tempat_lahir'] }},
                                {{ $peserta['tanggal_lahir'] }}</p>
                            <p>WA: {{ $peserta['no_wa'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- desktop table view -->
            <div class="hidden lg:block overflow-x-auto rounded-lg border border-gray-200" id="desktopView">
                <table class="w-full divide-y divide-gray-200 min-w-[1400px]">
                    <thead class="bg-jamselinas-secondary">
                        <tr>
                            <th scope="col" class="px-4 py-4 text-left w-12">
                                <input type="checkbox" id="selectAll"
                                    class="rounded border-gray-300 text-jamselinas-secondary focus:ring-jamselinas-secondary">
                            </th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[100px]">
                                No Reg</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[180px]">
                                Nama Lengkap</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[200px]">
                                Email</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[100px]">
                                Jenis Kelamin</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[140px]">
                                NIK</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[120px]">
                                Tempat Lahir</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[120px]">
                                Tanggal Lahir</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[250px]">
                                Alamat</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[80px]">
                                Golongan Darah</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[120px]">
                                Penyakit Bawaan</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[140px]">
                                No WhatsApp</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[140px]">
                                No Darurat</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[120px]">
                                Hubungan Darurat</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[300px]">
                                Komunitas</th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider min-w-[100px]">
                                Ukuran Jersey</th>
                            <th scope="col"
                                class="px-4 py-4 text-center text-sm font-semibold text-white uppercase tracking-wider min-w-[200px]">
                                Status</th>
                            <th scope="col"
                                class="px-4 py-4 text-center text-sm font-semibold text-white uppercase tracking-wider min-w-[120px]">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($pesertaData as $peserta)
                            <tr class="hover:bg-gray-50 transition-colors search-item"
                                data-community="{{ $peserta['komunitas'] }}" data-name="{{ $peserta['nama'] }}"
                                data-nik="{{ $peserta['nik'] }}" data-email="{{ $peserta['email'] }}">
                                <td class="px-4 py-4">
                                    <input type="checkbox"
                                        class="participant-checkbox rounded border-gray-300 text-jamselinas-secondary focus:ring-jamselinas-secondary"
                                        value="{{ $peserta['reg'] }}" data-community="{{ $peserta['komunitas'] }}"
                                        data-name="{{ $peserta['nama'] }}">
                                </td>
                                <td class="px-4 py-4 text-sm font-mono text-jamselinas-text font-semibold">
                                    {{ $peserta['reg'] }}</td>
                                <td class="px-4 py-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $peserta['nama'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900">{{ $peserta['email'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900">{{ $peserta['jenis_kelamin'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm font-mono text-gray-900">{{ $peserta['nik'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900">{{ $peserta['tempat_lahir'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900">{{ $peserta['tanggal_lahir'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900 max-w-[250px] truncate"
                                        title="{{ $peserta['alamat'] }}">{{ $peserta['alamat'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900">{{ $peserta['gol_darah'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900">{{ $peserta['penyakit_bawaan'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900">{{ $peserta['no_wa'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900">{{ $peserta['no_darurat'] }}</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="text-sm text-gray-900">{{ $peserta['hubungan_darurat'] }}</div>
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
                                    <span
                                        class="inline-flex items-center px-2.5 py-1 rounded-full text-sm font-medium
                                        {{ $peserta['status'] === 'Lunas' ? 'bg-green-100 text-green-800' : 'bg-orange-100 text-orange-800' }}">
                                        {{ $peserta['status'] }}
                                    </span>
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

    <!-- payment upload modal -->
    <div id="paymentModal"
        class="fixed inset-0 backdrop-blur-sm bg-opacity-50 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl max-w-lg w-full">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-jamselinas-text">Upload Bukti Pembayaran</h3>
                    <button onclick="closePaymentModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="mb-6">
                    <p class="text-sm text-gray-600 mb-2">Peserta yang dipilih:</p>
                    <div id="selectedParticipants" class="bg-gray-50 rounded-lg p-3 max-h-32 overflow-y-auto">
                        <!-- selected participants will be shown here -->
                    </div>
                </div>

                <form id="paymentForm" enctype="multipart/form-data">
                    <div class="mb-6">
                        <label for="paymentProof" class="block text-sm font-medium text-gray-700 mb-2">
                            Bukti Pembayaran
                        </label>
                        <div class="flex items-center justify-center w-full">
                            <label for="paymentProof"
                                class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition-colors">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-2 text-gray-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-1 text-sm text-gray-500"><span class="font-semibold">Click to
                                            upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500">JPG, PNG or PDF (MAX. 10MB)</p>
                                </div>
                                <input id="paymentProof" name="payment_proof" type="file" class="hidden"
                                    accept="image/*,.pdf" required />
                            </label>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="paymentNotes" class="block text-sm font-medium text-gray-700 mb-2">
                            Catatan (Opsional)
                        </label>
                        <textarea id="paymentNotes" name="notes" rows="3"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-jamselinas-secondary focus:border-jamselinas-secondary"
                            placeholder="Tambahkan catatan jika diperlukan..."></textarea>
                    </div>

                    <div class="flex gap-3">
                        <button type="button" onclick="closePaymentModal()"
                            class="flex-1 px-4 py-2 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 transition-colors">
                            Batal
                        </button>
                        <button type="submit"
                            class="flex-1 px-4 py-2 text-white bg-jamselinas-secondary rounded-lg hover:bg-jamselinas-primary transition-colors">
                            Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let selectedParticipants = [];
        let currentPage = 1;
        let itemsPerPage = 10;
        let filteredItems = [];
        let allItems = [];

        document.addEventListener('DOMContentLoaded', function() {
            // initialize data
            initializeData();

            // search functionality
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', function() {
                performSearch(this.value);
            });

            // checkbox functionality
            const selectAllCheckbox = document.getElementById('selectAll');
            const bulkActions = document.getElementById('bulkActions');
            const selectedCount = document.getElementById('selectedCount');

            // select all functionality
            if (selectAllCheckbox) {
                selectAllCheckbox.addEventListener('change', function() {
                    const visibleCheckboxes = getVisibleCheckboxes();
                    visibleCheckboxes.forEach(checkbox => {
                        checkbox.checked = this.checked;
                    });
                    updateSelectedParticipants();
                });
            }

            // individual checkbox functionality - using event delegation
            document.addEventListener('change', function(e) {
                if (e.target.classList.contains('participant-checkbox')) {
                    updateSelectedParticipants();
                }
            });

            function updateSelectedParticipants() {
                // Hanya ambil checkbox yang visible (tidak duplikat antara mobile dan desktop)
                const visibleCheckboxes = getVisibleCheckboxes();
                selectedParticipants = Array.from(visibleCheckboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => ({
                        regNo: checkbox.value,
                        community: checkbox.dataset.community,
                        name: checkbox.dataset.name
                    }));

                selectedCount.textContent = selectedParticipants.length;

                if (selectedParticipants.length > 0) {
                    bulkActions.classList.remove('hidden');
                    bulkActions.classList.add('flex');
                } else {
                    bulkActions.classList.add('hidden');
                    bulkActions.classList.remove('flex');
                }

                // update select all checkbox state
                if (selectAllCheckbox) {
                    const checkedCount = visibleCheckboxes.filter(cb => cb.checked).length;
                    selectAllCheckbox.checked = checkedCount === visibleCheckboxes.length && visibleCheckboxes
                        .length > 0;
                    selectAllCheckbox.indeterminate = checkedCount > 0 && checkedCount < visibleCheckboxes.length;
                }
            }

            function getVisibleCheckboxes() {
                // Deteksi apakah sedang di mobile atau desktop view
                const mobileView = document.getElementById('mobileView');
                const desktopView = document.getElementById('desktopView');

                const isMobileVisible = window.getComputedStyle(mobileView).display !== 'none';
                const isDesktopVisible = window.getComputedStyle(desktopView).display !== 'none';

                let visibleCheckboxes = [];

                if (isMobileVisible) {
                    // Ambil checkbox dari mobile view yang visible
                    const visibleMobileItems = mobileView.querySelectorAll(
                        '.search-item:not([style*="display: none"])');
                    visibleMobileItems.forEach(item => {
                        const checkbox = item.querySelector('.participant-checkbox');
                        if (checkbox) visibleCheckboxes.push(checkbox);
                    });
                } else if (isDesktopVisible) {
                    // Ambil checkbox dari desktop view yang visible
                    const visibleDesktopItems = desktopView.querySelectorAll(
                        '.search-item:not([style*="display: none"])');
                    visibleDesktopItems.forEach(item => {
                        const checkbox = item.querySelector('.participant-checkbox');
                        if (checkbox) visibleCheckboxes.push(checkbox);
                    });
                }

                return visibleCheckboxes;
            }

            // payment form submission
            document.getElementById('paymentForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData();
                formData.append('payment_proof', document.getElementById('paymentProof').files[0]);
                formData.append('notes', document.getElementById('paymentNotes').value);
                formData.append('participants', JSON.stringify(selectedParticipants.map(p => p.regNo)));

                // todo: send to backend - endpoint: post /admin/peserta-kolektif/upload-payment
                console.log('uploading payment proof for:', selectedParticipants);
                alert('Bukti pembayaran berhasil diupload!');
                closePaymentModal();

                // reset checkboxes - hanya yang visible
                const visibleCheckboxes = getVisibleCheckboxes();
                visibleCheckboxes.forEach(checkbox => checkbox.checked = false);
                updateSelectedParticipants();
            });

            // file upload preview
            document.getElementById('paymentProof').addEventListener('change', function(e) {
                const file = e.target.files[0];
                const label = e.target.parentElement;
                const textElement = label.querySelector('p');

                if (file) {
                    textElement.innerHTML =
                        `<span class="font-semibold text-green-600">${file.name}</span> selected`;
                } else {
                    textElement.innerHTML =
                        '<span class="font-semibold">Click to upload</span> or drag and drop';
                }
            });
        });

        function initializeData() {
            // Ambil semua search-item dari kedua view
            const mobileItems = Array.from(document.querySelectorAll('#mobileView .search-item'));
            const desktopItems = Array.from(document.querySelectorAll('#desktopView .search-item'));

            // Gunakan salah satu sebagai referensi (desktop items)
            allItems = desktopItems.length > 0 ? desktopItems : mobileItems;
            filteredItems = [...allItems];
            updatePagination();
        }

        function performSearch(searchTerm) {
            const term = searchTerm.toLowerCase().trim();

            // Search di kedua view (mobile dan desktop)
            const mobileItems = Array.from(document.querySelectorAll('#mobileView .search-item'));
            const desktopItems = Array.from(document.querySelectorAll('#desktopView .search-item'));

            let matchedCount = 0;

            if (term === '') {
                // show all items di kedua view
                [...mobileItems, ...desktopItems].forEach(item => {
                    item.style.display = '';
                });
                filteredItems = [...allItems];
                matchedCount = allItems.length;
            } else {
                // filter items based on search term di kedua view
                [...mobileItems, ...desktopItems].forEach(item => {
                    const name = item.dataset.name?.toLowerCase() || '';
                    const community = item.dataset.community?.toLowerCase() || '';
                    const nik = item.dataset.nik?.toLowerCase() || '';
                    const email = item.dataset.email?.toLowerCase() || '';

                    const matches = name.includes(term) ||
                        community.includes(term) ||
                        nik.includes(term) ||
                        email.includes(term);

                    item.style.display = matches ? '' : 'none';
                });

                // Hitung filtered items berdasarkan desktop view saja
                filteredItems = desktopItems.filter(item => {
                    return item.style.display !== 'none';
                });
            }

            currentPage = 1;
            updatePagination();
            updateSelectedParticipants();
        }

        function updatePagination() {
            const totalItems = filteredItems.length;
            const totalPages = Math.ceil(totalItems / itemsPerPage);

            // update pagination info
            const currentStart = totalItems > 0 ? ((currentPage - 1) * itemsPerPage) + 1 : 0;
            const currentEnd = Math.min(currentPage * itemsPerPage, totalItems);

            document.getElementById('currentStart').textContent = currentStart;
            document.getElementById('currentEnd').textContent = currentEnd;
            document.getElementById('totalItems').textContent = totalItems;

            // update pagination buttons
            const prevPage = document.getElementById('prevPage');
            const nextPage = document.getElementById('nextPage');

            prevPage.disabled = currentPage === 1;
            nextPage.disabled = currentPage === totalPages || totalPages === 0;

            // update page numbers
            updatePageNumbers(totalPages);

            // hide pagination if no items
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
                goToPage(currentPage - 1);
            }
        }

        function nextPage() {
            const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
            if (currentPage < totalPages) {
                goToPage(currentPage + 1);
            }
        }

        function uploadBulkPayment() {
            if (selectedParticipants.length === 0) {
                alert('Pilih peserta terlebih dahulu');
                return;
            }

            // check if all selected participants are from the same community
            const communities = [...new Set(selectedParticipants.map(p => p.community))];
            if (communities.length > 1) {
                alert('Silakan pilih peserta dari komunitas yang sama untuk upload bukti pembayaran kolektif');
                return;
            }

            // show selected participants in modal
            const selectedList = document.getElementById('selectedParticipants');
            selectedList.innerHTML = selectedParticipants.map(p =>
                `<div class="flex justify-between items-center py-1">
                    <span class="text-sm">${p.name}</span>
                    <span class="text-xs text-gray-500 font-mono">${p.regNo}</span>
                </div>`
            ).join('');

            document.getElementById('paymentModal').classList.remove('hidden');
            document.getElementById('paymentModal').classList.add('flex');
        }

        function closePaymentModal() {
            document.getElementById('paymentModal').classList.add('hidden');
            document.getElementById('paymentModal').classList.remove('flex');
            document.getElementById('paymentForm').reset();

            // reset file upload label
            const label = document.querySelector('label[for="paymentProof"] p');
            if (label) {
                label.innerHTML = '<span class="font-semibold">Click to upload</span> or drag and drop';
            }
        }

        function triggerExcelUpload() {
            document.getElementById('excelFileInput').click();
        }

        function handleExcelUpload(event) {
            const file = event.target.files[0];
            if (file) {
                const formData = new FormData();
                formData.append('excel_file', file);

                // todo: send to backend - endpoint: post /admin/peserta-kolektif/import-excel
                console.log('uploading excel file:', file.name);
                alert('File excel berhasil diupload! Data akan segera diproses.');

                // reset file input
                event.target.value = '';
            }
        }

        function exportData() {
            // todo: download excel template or current data - endpoint: get /admin/peserta-kolektif/export
            const searchParams = new URLSearchParams(window.location.search);
            window.open(`/admin/peserta-kolektif/export?${searchParams}`, '_blank');
        }

        function lihatDetail(regNo) {
            // todo: redirect to detail page - route: admin.peserta-kolektif.show
            window.location.href = `/admin/peserta-kolektif/${regNo}`;
        }

        function editData(regNo) {
            // todo: redirect to edit form - route: admin.peserta-kolektif.edit
            window.location.href = `/admin/peserta-kolektif/${regNo}/edit`;
        }

        function hapusData(regNo, nama) {
            if (confirm(`Apakah anda yakin ingin menghapus data peserta "${nama}" (${regNo})?`)) {
                // todo: send delete request - endpoint: delete /admin/peserta-kolektif/{regNo}
                fetch(`/admin/peserta-kolektif/${regNo}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert(`Data peserta ${nama} telah dihapus`);
                        location.reload();
                    })
                    .catch(error => {
                        console.error('error:', error);
                        alert('Terjadi kesalahan saat menghapus data');
                    });
            }
        }

        // close modal when clicking outside
        document.addEventListener('click', function(event) {
            const modal = document.getElementById('paymentModal');
            if (event.target === modal) {
                closePaymentModal();
            }
        });
    </script>
@endpush
