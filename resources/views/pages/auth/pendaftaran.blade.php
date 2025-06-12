@extends('layouts.app')

@section('title', 'Form Pendaftaran - JAMSELINAS XIV 2025')

@section('body-class', 'bg-neutral-100')

@section('main-class', 'mt-16 mb-0')

@section('navbar')
    @include('layouts._navbar_back')
@endsection

@section('content')
    <div class="min-h-screen w-full py-8 px-4">
        <!-- main form container -->
        <section class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-8">
            <!-- form header -->
            <header class="mb-10 text-center">
                <h1 class="text-4xl md:text-5xl font-semibold text-black mb-2">Form Pendaftaran</h1>
                <p class="text-lg text-gray-600">JAMSELINAS XIV 2025 - Banjarmasin</p>
            </header>

            <!-- pendaftaran form -->
            <form method="POST" action="#" class="space-y-6" autocomplete="off">
                @csrf

                <!-- emsil field -->
                <div>
                    <label for="email" class="block mb-2 text-xl font-medium text-black">
                        E-mail <span class="text-red-500">*</span>
                    </label>
                    <input type="email" id="email" name="email" placeholder="contoh@email.com" required
                        
                        class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- field nama -->
                <div>
                    <label for="name" class="block mb-2 text-xl font-medium text-black">
                        Nama <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="name" name="name" required 
                        class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- password fields -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="password" class="block mb-2 text-xl font-medium text-black">
                            Password <span class="text-red-500">*</span>
                        </label>
                        <input type="password" id="password" name="password" required autocomplete="new-password"
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation" class="block mb-2 text-xl font-medium text-black">
                            Konfirmasi Password <span class="text-red-500">*</span>
                        </label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            autocomplete="new-password"
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                    </div>
                </div>

                <!-- phone numbers -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block mb-2 text-xl font-medium text-black">
                            Nomor Telepon / WA <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <span
                                class="absolute left-3 top-1/2 transform -translate-y-1/2 text-lg font-bold text-gray-700 bg-gray-100 px-2 rounded">+62</span>
                            <input type="tel" id="phone" name="phone" placeholder="812-3456-7890" required
                                
                                class="w-full pl-16 pr-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                        </div>
                        @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="emergency_phone" class="block mb-2 text-xl font-medium text-black">
                            Telepon / WA Darurat <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <span
                                class="absolute left-3 top-1/2 transform -translate-y-1/2 text-lg font-bold text-gray-700 bg-gray-100 px-2 rounded">
                                +62
                            </span>
                            <input type="tel" id="emergency_phone" name="emergency_phone" required 
                                class="w-full pl-16 pr-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                        </div>
                        @error('emergency_phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- birth information -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="birth_place" class="block mb-2 text-xl font-medium text-black">
                            Tempat Lahir <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="birth_place" name="birth_place" required 
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                        @error('birth_place')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="birth_date" class="block mb-2 text-xl font-medium text-black">
                            Tanggal Lahir <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="birth_date" name="birth_date" required 
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                        @error('birth_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- gender and blood type -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="gender" class="block mb-2 text-xl font-medium text-black">
                            Jenis Kelamin
                        </label>
                        <div class="relative">
                            <select id="gender" name="gender" 
                                class="w-full px-4 py-3 pr-10 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 appearance-none">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </div>
                        @error('gender')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="blood_type" class="block mb-2 text-xl font-medium text-black">
                            Golongan Darah
                        </label>
                        <div class="relative">
                            <select id="blood_type" name="blood_type" 
                                class="w-full px-4 py-3 pr-10 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 appearance-none">
                                <option value="">Pilih Golongan Darah</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                            <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- nationality -->
                <div>
                    <label for="nationality" class="block mb-2 text-xl font-medium text-black">
                        Negara Asal(domisili bagi WNI)/Kewarganegaraan <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="nationality" name="nationality" required 
                        class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                    @error('nationality')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- address info -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="province" class="block mb-2 text-xl font-medium text-black">
                            Provinsi
                        </label>
                        <input type="text" id="province" name="province" placeholder="Kalimantan Selatan"
                            
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                        @error('province')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="city" class="block mb-2 text-xl font-medium text-black">
                            Kota / Kabupaten
                        </label>
                        <input type="text" id="city" name="city" placeholder="Banjarbaru" 
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                        @error('city')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="district" class="block mb-2 text-xl font-medium text-black">
                            Kecamatan
                        </label>
                        <input type="text" id="district" name="district" placeholder="Banjarbaru Selatan"
                            
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                    </div>
                    <div>
                        <label for="village" class="block mb-2 text-xl font-medium text-black">
                            Kelurahan / Desa
                        </label>
                        <input type="text" id="village" name="village" placeholder="Guntung Manggis"
                            
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                    </div>
                </div>

                <!-- address -->
                <div>
                    <label for="address" class="block mb-2 text-xl font-medium text-black">
                        Alamat Lengkap
                    </label>
                    <textarea id="address" name="address" rows="3" 
                        class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg resize-none focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500"></textarea>
                </div>

                <!-- postal code and bike type -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="postal_code" class="block mb-2 text-xl font-medium text-black">
                            Kode Pos
                        </label>
                        <input type="text" id="postal_code" name="postal_code" 
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                    </div>
                    <div>
                        <label for="bike_type" class="block mb-2 text-xl font-medium text-black">
                            Jenis Sepeda <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="bike_type" name="bike_type" required 
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                        @error('bike_type')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- ig and jersey size -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="instagram" class="block mb-2 text-xl font-medium text-black">
                            Instagram
                        </label>
                        <input type="text" id="instagram" name="instagram" placeholder="@username"
                            
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                    </div>
                    <div>
                        <label for="jersey_size" class="block mb-2 text-xl font-medium text-black">
                            Ukuran Jersey <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <select id="jersey_size" name="jersey_size" required 
                                class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 appearance-none">
                                <option value="">Pilih Ukuran</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="2XL">2XL</option>
                                <option value="3XL">3XL</option>
                                <option value="4XL">4XL</option>
                                <option value="5XL">5XL</option>
                                <option value="6XL">6XL</option>
                            </select>
                            {{-- KALAU PAKAI INPUT FIELD TEXT --}}
                            {{-- <input type="text" id="jersey_size" name="jersey_size" required 
                                class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" /> --}}
                            {{-- KALAU PAKAI INPUT FIELD TEXT, DISABLE SPAN DIBAWAH INI --}}
                            <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                            @error('jersey_size')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- cotton shirt options -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="mt-[28px]">
                        <label for="cotton_shirt_size" class="block mb-2 text-xl font-medium text-black">
                            Ukuran add on Kaos Katun yang dibeli
                        </label>
                        <div class="relative">
                            <select id="cotton_shirt_size" name="cotton_shirt_size" required 
                                class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 appearance-none">
                                <option value="">Pilih Ukuran</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="2XL">2XL</option>
                                <option value="3XL">3XL</option>
                                <option value="4XL">4XL</option>
                                <option value="5XL">5XL</option>
                                <option value="6XL">6XL</option>
                            </select>
                            {{-- KALAU PAKAI INPUT FIELD TEXT --}}
                            {{-- <input type="text" id="cotton_shirt_size" name="cotton_shirt_size" required 
                                    class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" /> --}}
                            {{-- KALAU PAKAI INPUT FIELD TEXT, DISABLE SPAN DIBAWAH INI  --}}
                            <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div>
                        <label for="cotton_shirt_color" class="block mb-2 text-xl font-medium text-black">
                            Warna add on kaos katun merchandise yang dibeli (putih / biru)
                        </label>
                        <div class="relative">
                            <select id="cotton_shirt_color" name="cotton_shirt_color" 
                                class="w-full px-4 py-3 pr-10 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 appearance-none">
                                <option value="">Pilih Warna</option>
                                <option value="putih">Putih</option>
                                <option value="biru">Biru</option>
                            </select>
                            {{-- KALAU PAKAI INPUT FIELD TEXT --}}
                            {{-- <input type="text" id="cotton_shirt_size" name="cotton_shirt_size" required 
                                class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" /> --}}
                            {{-- KALAU PAKAI INPUT FIELD TEXT, DISABLE SPAN DIBAWAH INI  --}}
                            <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- community and bike model -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="community" class="block mb-2 text-xl font-medium text-black">
                            Dari Komunitas mana anda berasal?
                        </label>
                        <input type="text" id="community" name="community" placeholder="Nama komunitas sepeda"
                            
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                    </div>
                    <div>
                        <label for="bike_model" class="block mb-2 text-xl font-medium text-black">
                            Sepeda apa yang anda gunakan?
                        </label>
                        <input type="text" id="bike_model" name="bike_model" 
                            placeholder="Contoh: Brompton, Dahon, dll"
                            class="w-full px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                    </div>
                </div>

                <!-- additional items -->
                <fieldset class="border-2 border-gray-200 rounded-lg p-6">
                    <legend class="px-3 text-2xl font-bold text-black">Merchandise Tambahan</legend>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <input type="checkbox" id="cotton_shirt_1pc" name="additional_items[]"
                                value="cotton-shirt-1pc"
                                class="w-5 h-5 text-sky-600 border-2 border-gray-300 focus:ring-sky-500" />
                            <label for="cotton_shirt_1pc" class="text-lg text-black">
                                Kaos Katun Special Jamselinas - 1 pcs <span class="font-bold text-green-600">+ Rp
                                    85.000</span>
                            </label>
                        </div>
                        <div class="flex items-center space-x-3">
                            <input type="checkbox" id="cotton_shirt_2pcs" name="additional_items[]"
                                value="cotton-shirt-2pcs"
                                class="w-5 h-5 text-sky-600 border-2 border-gray-300 focus:ring-sky-500" />
                            <label for="cotton_shirt_2pcs" class="text-lg text-black">
                                Kaos Katun Special Jamselinas - 2 pcs <span class="font-bold text-green-600">+ Rp
                                    170.000</span>
                            </label>
                        </div>
                    </div>
                </fieldset>

                <!-- merchandise images -->
                <section class="flex flex-col items-center mb-10 max-md:gap-4" aria-label="Merchandise Images">
                    <img src="{{ asset('images/form_pendaftaran/merch_1.png') }}" alt="Merchandise Image 1"
                        class="object-cover h-[403px] w-[538px] max-md:w-full max-md:h-auto" />
                    <img src="{{ asset('images/form_pendaftaran/merch_2.png') }}" alt="Merchandise Image 2"
                        class="object-cover h-[538px] w-[538px] max-md:w-full max-md:h-auto" />
                    <img src="{{ asset('images/form_pendaftaran/merch_3.png') }}" alt="Merchandise Image 3"
                        class="object-cover h-[305px] w-[539px] max-md:w-full max-md:h-auto" />
                </section>

                <!-- voucher section -->
                <div>
                    <label for="voucher" class="block mb-2 text-xl font-medium text-black">
                        Kode Voucher
                    </label>
                    <div class="flex gap-2">
                        <input type="text" id="voucher" name="voucher" 
                            placeholder="Masukkan kode voucher (opsional)"
                            class="flex-1 px-4 py-3 text-lg bg-white border-2 border-sky-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500" />
                        <button type="button" id="apply-voucher"
                            class="px-6 py-3 text-lg font-bold text-white bg-[#0B74B9] border-2 border-[#0B74B9] rounded-lg transition-all duration-200 shadow-lg hover:bg-white hover:text-[#0B74B9] hover:border-[#0B74B9] focus:bg-white focus:text-[#0B74B9] focus:border-[#0B74B9] focus:outline-none focus:ring-4 focus:ring-[#0B74B9] focus:ring-offset-2 cursor-pointer">
                            Apply
                        </button>
                    </div>
                    <p class="mt-2 text-sm text-gray-600">
                        Kosongkan apabila tidak memiliki voucher
                    </p>
                </div>

                <!-- terms and conditions -->
                <div class="flex items-start space-x-3">
                    <input type="checkbox" id="terms_agreement" name="terms_agreement" required
                        class="w-5 h-5 text-sky-600 border-2 border-gray-300 rounded focus:ring-sky-500 mt-1" />
                    <label for="terms_agreement" class="text-lg text-black leading-relaxed font-poppins">
                        Saya telah membaca dan menyetujui
                        <a href="#" class="text-sky-600 underline hover:text-sky-700 font-medium">Syarat dan
                            Ketentuan</a>
                        JAMSELINAS XIV 2025. <span class="text-red-500">*</span>
                    </label>
                </div>

                <!-- submit button -->
                <div class="pt-6">
                    <button type="submit"
                        class="w-full py-4 text-2xl font-bold text-white bg-[#346E97] border-2 border-[#346E97] rounded-lg transition-all duration-200 shadow-lg hover:bg-white hover:text-[#346E97] hover:border-[#346E97] focus:bg-white focus:text-[#346E97] focus:border-[#346E97] focus:outline-none focus:ring-4 focus:ring-[#346E97] focus:ring-offset-2 cursor-pointer">
                        Daftar Sekarang
                    </button>
                </div>
            </form>
        </section>
    </div>

    <script>
        document.getElementById('apply-voucher').addEventListener('click', function() {
            const voucher = document.getElementById('voucher').value;
            if (voucher) {
                // logic validation buat voucher
                console.log('Applying voucher:', voucher);
                // ...
            }
        });

        // form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('password_confirmation').value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Password dan konfirmasi password tidak cocok!');
                return false;
            }
        });
    </script>
@endsection
