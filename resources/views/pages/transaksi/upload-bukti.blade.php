@extends('layouts.app')

@section('title', 'Upload Bukti Pembayaran - JAMSELINAS XIV 2025')

@section('body-class', 'bg-neutral-100')

@section('main-class', 'mt-16 mb-0')

@section('navbar')
    @include('layouts._navbar_back')
@endsection

@section('content')
    <div class="min-h-screen w-full py-8 px-4">
        <!-- main container -->
        <section class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg p-8">
            <!-- header -->
            <header class="mb-8 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-jamselinas-primary to-jamselinas-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-jamselinas-text mb-2 font-poppins">Upload Bukti Pembayaran</h1>
                <p class="text-lg text-jamselinas-text/70 font-inter">JAMSELINAS XIV 2025 - Banjarmasin</p>
            </header>

            <!-- info pembayaran -->
            <div class="bg-jamselinas-cream border border-jamselinas-primary/20 rounded-xl p-6 mb-8">
                <h2 class="text-xl font-bold text-jamselinas-text mb-4 font-poppins flex items-center">
                    <svg class="w-6 h-6 text-jamselinas-primary mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                    Informasi Pembayaran
                </h2>
                <div class="space-y-3 text-jamselinas-text font-inter">
                    <div class="flex justify-between">
                        <span>Total Pembayaran:</span>
                        <span class="font-bold text-jamselinas-primary">Rp 485.000</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Metode Pembayaran:</span>
                        <span class="font-semibold">Transfer Bank Kalsel</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Status:</span>
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">Menunggu Verifikasi</span>
                    </div>
                </div>
            </div>

            <!-- form upload -->
            <form method="POST" action="#" enctype="multipart/form-data" class="space-y-6" id="uploadForm">
                @csrf

                <!-- upload area -->
                <div>
                    <label for="bukti_pembayaran" class="block mb-3 text-lg font-semibold text-jamselinas-text">
                        Upload Bukti Transfer <span class="text-red-500">*</span>
                    </label>
                    
                    <div class="border-2 border-dashed border-jamselinas-primary/30 hover:border-jamselinas-primary rounded-xl p-8 text-center transition-all duration-300" id="uploadArea">
                        <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*,.pdf" required class="hidden" />
                        
                        <div id="uploadPlaceholder">
                            <svg class="w-16 h-16 text-jamselinas-primary/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <p class="text-lg font-semibold text-jamselinas-text mb-2">Klik untuk upload atau drag & drop</p>
                            <p class="text-sm text-jamselinas-text/60">PNG, JPG, PDF (Maks. 5MB)</p>
                        </div>

                        <div id="uploadPreview" class="hidden">
                            <div class="flex items-center justify-center space-x-4">
                                <div class="w-16 h-16 bg-jamselinas-primary/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-jamselinas-primary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="text-left">
                                    <p class="font-semibold text-jamselinas-text" id="fileName"></p>
                                    <p class="text-sm text-jamselinas-text/60" id="fileSize"></p>
                                </div>
                                <button type="button" onclick="removeFile()" class="text-red-500 hover:text-red-700">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    @error('bukti_pembayaran')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- catatan tambahan -->
                <div>
                    <label for="catatan" class="block mb-2 text-lg font-semibold text-jamselinas-text">
                        Catatan Tambahan (Opsional)
                    </label>
                    <textarea id="catatan" name="catatan" rows="3" placeholder="Tambahkan catatan jika diperlukan..."
                        class="w-full px-4 py-3 text-base bg-white border-2 border-jamselinas-primary/30 rounded-lg resize-none focus:outline-none focus:ring-2 focus:ring-jamselinas-primary focus:border-jamselinas-primary"></textarea>
                </div>

                <!-- info penting -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <h3 class="font-semibold text-blue-800 mb-2 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                        Informasi Penting
                    </h3>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>• Pastikan bukti transfer yang diupload jelas dan dapat dibaca</li>
                        <li>• Verifikasi pembayaran akan dilakukan dalam 1x24 jam</li>
                        <li>• Anda akan mendapat notifikasi via email setelah verifikasi selesai</li>
                        <li>• Jika ada kendala, silakan hubungi customer service kami</li>
                    </ul>
                </div>

                <!-- submit button -->
                <div class="pt-4">
                    <button type="submit" id="submitBtn"
                        class="w-full py-4 text-xl font-bold text-white bg-jamselinas-secondary border-2 border-jamselinas-secondary rounded-lg transition-all duration-200 shadow-lg hover:bg-white hover:text-jamselinas-secondary hover:border-jamselinas-secondary focus:bg-white focus:text-jamselinas-secondary focus:border-jamselinas-secondary focus:outline-none focus:ring-4 focus:ring-jamselinas-secondary focus:ring-offset-2 cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <span id="submitText">Upload Bukti Pembayaran</span>
                        </span>
                    </button>
                </div>
            </form>

            <!-- link ke halaman lain -->
            <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                <p class="text-jamselinas-text/70 font-inter mb-4">Butuh bantuan?</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="{{ route('hubungi-kami') }}" 
                       class="inline-flex items-center justify-center px-4 py-2 border border-jamselinas-primary text-jamselinas-primary hover:bg-jamselinas-primary hover:text-white rounded-lg transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        Hubungi Customer Service
                    </a>
                    <a href="{{ route('profile') }}" 
                       class="inline-flex items-center justify-center px-4 py-2 bg-jamselinas-primary text-white hover:bg-jamselinas-secondary rounded-lg transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Kembali ke Profile
                    </a>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadArea = document.getElementById('uploadArea');
            const fileInput = document.getElementById('bukti_pembayaran');
            const uploadPlaceholder = document.getElementById('uploadPlaceholder');
            const uploadPreview = document.getElementById('uploadPreview');
            const fileName = document.getElementById('fileName');
            const fileSize = document.getElementById('fileSize');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');

            // click to upload
            uploadArea.addEventListener('click', () => {
                fileInput.click();
            });

            // drag & drop functionality
            uploadArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadArea.classList.add('border-jamselinas-primary', 'bg-jamselinas-cream/50');
            });

            uploadArea.addEventListener('dragleave', () => {
                uploadArea.classList.remove('border-jamselinas-primary', 'bg-jamselinas-cream/50');
            });

            uploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadArea.classList.remove('border-jamselinas-primary', 'bg-jamselinas-cream/50');
                
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    handleFileSelect(files[0]);
                }
            });

            // file input change
            fileInput.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    handleFileSelect(e.target.files[0]);
                }
            });

            function handleFileSelect(file) {
                // validate file size (5MB)
                if (file.size > 5 * 1024 * 1024) {
                    alert('Ukuran file terlalu besar. Maksimal 5MB.');
                    return;
                }

                // validate file type
                const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'];
                if (!allowedTypes.includes(file.type)) {
                    alert('Tipe file tidak didukung. Gunakan PNG, JPG, atau PDF.');
                    return;
                }

                // update UI
                fileName.textContent = file.name;
                fileSize.textContent = formatFileSize(file.size);
                
                uploadPlaceholder.classList.add('hidden');
                uploadPreview.classList.remove('hidden');
            }

            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }

            window.removeFile = function() {
                fileInput.value = '';
                uploadPlaceholder.classList.remove('hidden');
                uploadPreview.classList.add('hidden');
            }

            // form submission
            document.getElementById('uploadForm').addEventListener('submit', function(e) {
                if (!fileInput.files.length) {
                    e.preventDefault();
                    alert('Silakan pilih file bukti pembayaran terlebih dahulu.');
                    return;
                }

                submitBtn.disabled = true;
                submitText.textContent = 'Mengupload...';
                
                // simulate upload progress (remove in production)
                setTimeout(() => {
                    // success simulation - replace with actual response handling
                    alert('Bukti pembayaran berhasil diupload! Kami akan memverifikasi dalam 1x24 jam.');
                    
                    // redirect to profile or payment status page
                    // window.location.href = "{{ route('profile') }}";
                    
                    // reset form for demo
                    submitBtn.disabled = false;
                    submitText.textContent = 'Upload Bukti Pembayaran';
                }, 2000);
            });
        });
    </script>
@endsection