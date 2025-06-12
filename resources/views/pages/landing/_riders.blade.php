<section class="container mx-auto py-16 px-4">
    <div class="text-center mb-8 lg:mb-12">
        <h2 class="font-bold font-poppins text-3xl lg:text-5xl text-jamselinas-primary">RIDERS STORY</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-6">
        @for ($i = 1; $i <= 3; $i++)
            <div
                class="bg-white rounded-2xl border border-black/10 shadow p-4 md:p-6 flex flex-col min-h-[280px] md:min-h-[320px]">
                <div class="flex items-center mb-3 md:mb-4">
                    <div
                        class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-gradient-to-br from-jamselinas-primary to-jamselinas-secondary flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 md:mr-4 flex-shrink-0">
                        U
                    </div>
                    <div class="min-w-0 flex-1">
                        <span class="text-black text-sm md:text-base block truncate">@username{{ $i }}</span>
                        <h4 class="text-black text-base md:text-lg font-bold truncate">Username{{ $i }}</h4>
                    </div>
                </div>
                <div class="flex-1">
                    <p class="text-black text-sm md:text-base text-justify leading-relaxed">
                        Testimoni peserta {{ $i }}. Kesan dan pengalaman mengikuti event Jamselinas yang
                        sangat berkesan dan menyenangkan bersama komunitas sepeda lipat.
                    </p>
                </div>
            </div>
        @endfor
    </div>
</section>
