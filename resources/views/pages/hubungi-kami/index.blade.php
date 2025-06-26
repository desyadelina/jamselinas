@extends('layouts.app')

@section('title', 'Hubungi Kami - JAMSELINAS XIV 2025')

@section('content')
    <!-- hero section -->
    <section
        class="relative bg-gradient-to-br from-jamselinas-gradient-start via-jamselinas-gradient-mid to-jamselinas-gradient-end py-16 lg:py-24 overflow-hidden">
        <div class="absolute inset-0 bg-white/10"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-jamselinas-primary mb-6 font-poppins">
                    Hubungi Kami
                </h1>
                <p class="text-lg md:text-xl text-jamselinas-text/80 leading-relaxed font-inter">
                    Kesuksesan <span class="font-semibold">JAMSELINAS XIV 2025</span> adalah tentang Anda semua. Jika ada
                    yang ingin Anda tanyakan, sarankan, atau diskusikan, jangan ragu untuk menghubungi kami.
                </p>
                <p class="text-lg md:text-xl text-jamselinas-text/80 leading-relaxed font-inter mt-4">
                    Bersama-sama, kita akan menciptakan momen yang tak terlupakan.
                </p>
            </div>
        </div>
        <!-- decorative elements -->
        <div class="absolute -top-24 -right-24 w-48 h-48 bg-jamselinas-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-jamselinas-secondary/10 rounded-full blur-3xl"></div>
    </section>

    <!-- contact section -->
    <section class="py-16 lg:py-20 bg-jamselinas-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- contact Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                    <!-- NTE KARIN contact card -->
                    <div
                        class="group bg-white rounded-2xl border border-gray-100 hover:border-jamselinas-primary/30 p-8 shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                        <div class="text-center">
                            <!-- avatar -->
                            <div
                                class="w-24 h-24 bg-gradient-to-br from-jamselinas-primary to-jamselinas-secondary rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>

                            <!-- name -->
                            <h3
                                class="text-2xl lg:text-3xl font-bold text-jamselinas-text mb-3 font-poppins group-hover:text-jamselinas-primary transition-colors">
                                NTE KARIN
                            </h3>

                            <!-- role/description -->
                            <p class="text-gray-600 leading-relaxed font-inter mb-8">
                                Koordinator Utama JAMSELINAS XIV 2025
                            </p>

                            <!-- whatsApp button -->
                            <a href="https://wa.me/6281234567890?text=Halo%20NTE%20KARIN,%20saya%20ingin%20bertanya%20tentang%20JAMSELINAS%20XIV%202025"
                                target="_blank"
                                class="inline-flex items-center justify-center w-full px-6 py-4 bg-green-500 hover:bg-green-600 text-white font-semibold text-lg rounded-xl transition-all duration-300 hover:shadow-lg transform hover:scale-105 group/btn">
                                <svg class="w-6 h-6 mr-3 group-hover/btn:scale-110 transition-transform" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                </svg>
                                WhatsApp
                            </a>
                        </div>
                    </div>

                    <!-- NTE ANING contact card -->
                    <div
                        class="group bg-white rounded-2xl border border-gray-100 hover:border-jamselinas-primary/30 p-8 shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                        <div class="text-center">
                            <!-- avatar -->
                            <div
                                class="w-24 h-24 bg-gradient-to-br from-jamselinas-secondary to-jamselinas-primary rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>

                            <!-- name -->
                            <h3
                                class="text-2xl lg:text-3xl font-bold text-jamselinas-text mb-3 font-poppins group-hover:text-jamselinas-primary transition-colors">
                                NTE ANING
                            </h3>

                            <!-- role/description -->
                            <p class="text-gray-600 leading-relaxed font-inter mb-8">
                                Koordinator Pendaftaran & Informasi
                            </p>

                            <!-- whatsApp button -->
                            <a href="https://wa.me/6281234567891?text=Halo%20NTE%20ANING,%20saya%20ingin%20bertanya%20tentang%20JAMSELINAS%20XIV%202025"
                                target="_blank"
                                class="inline-flex items-center justify-center w-full px-6 py-4 bg-green-500 hover:bg-green-600 text-white font-semibold text-lg rounded-xl transition-all duration-300 hover:shadow-lg transform hover:scale-105 group/btn">
                                <svg class="w-6 h-6 mr-3 group-hover/btn:scale-110 transition-transform" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                </svg>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- additional ingfo -->
                <div class="mt-16 text-center">
                    <div
                        class="bg-gradient-to-r from-jamselinas-gradient-start to-jamselinas-gradient-mid rounded-2xl p-8 border border-jamselinas-primary/20">
                        <div class="max-w-2xl mx-auto">
                            <div
                                class="w-16 h-16 bg-jamselinas-primary rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl lg:text-2xl font-bold text-jamselinas-primary mb-4 font-poppins">
                                Jam Operasional
                            </h3>
                            <p class="text-jamselinas-text font-inter leading-relaxed">
                                Kami siap membantu Anda setiap hari mulai pukul <span class="font-semibold">08:00 - 20:00
                                    WIB</span>.
                                Untuk respon yang lebih cepat, silakan hubungi melalui WhatsApp.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- quick contact info -->
                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        class="text-center p-6 bg-white rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                        <div
                            class="w-12 h-12 bg-jamselinas-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-jamselinas-primary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-jamselinas-text mb-2">Chat Langsung</h4>
                        <p class="text-sm text-gray-600">Respon cepat via WhatsApp</p>
                    </div>

                    <div
                        class="text-center p-6 bg-white rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                        <div
                            class="w-12 h-12 bg-jamselinas-secondary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-jamselinas-secondary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-jamselinas-text mb-2">Terpercaya</h4>
                        <p class="text-sm text-gray-600">Tim official JAMSELINAS</p>
                    </div>

                    <div
                        class="text-center p-6 bg-white rounded-xl border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-green-500/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-jamselinas-text mb-2">24/7 Support</h4>
                        <p class="text-sm text-gray-600">Siap membantu kapan saja</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA section -->
    <section
        class="py-16 lg:py-20 bg-gradient-to-r from-jamselinas-primary to-jamselinas-secondary relative overflow-hidden">
        <img src="{{ asset('images/background/assets_1.png') }}" alt=""
            class="absolute inset-0 w-full h-full object-cover pointer-events-none select-none" />
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 font-poppins">
                    Masih Ada Pertanyaan?
                </h2>
                <p class="text-lg md:text-xl text-white/90 mb-8 font-inter leading-relaxed">
                    Jangan ragu untuk menghubungi kami. Tim JAMSELINAS XIV 2025 siap membantu mewujudkan pengalaman
                    bersepeda terbaik Anda!
                </p>
                <a href="{{ route('form.pendaftaran') }}"
                    class="inline-flex items-center px-8 py-4 bg-white text-jamselinas-primary font-bold text-lg rounded-xl hover:bg-jamselinas-cream hover:text-jamselinas-secondary transition-all duration-300 hover:shadow-lg transform hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>
@endsection
