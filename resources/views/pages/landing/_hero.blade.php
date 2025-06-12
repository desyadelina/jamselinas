<section id="hero"
    class="relative w-full min-h-[600px] lg:h-[968px] bg-gradient-to-b from-jamselinas-gradient-start to-jamselinas-gradient-mid flex items-center overflow-hidden">
    <img src="{{ asset('images/hero_bg.png') }}" alt=""
        class="absolute left-0 z-0 pointer-events-none select-none w-[842px] max-w-none" />
    <div class="container mx-auto flex flex-col lg:flex-row items-center py-16 gap-8 relative z-10">
        <div class="flex-1 flex flex-col gap-6 text-center lg:text-left">
            <h1 class="font-bold font-inter text-3xl lg:text-5xl text-jamselinas-secondary leading-tight">Nikmati Sensasi
                bersepeda
                bersama JAMSELINAS!</h1>
            <a href="{{ route('form.pendaftaran') }}">
                <button
                    class="w-full max-w-xs mx-auto lg:mx-0 h-14 bg-jamselinas-secondary hover:bg-jamselinas-secondary/90 text-white font-roboto text-xl rounded-xl shadow transition cursor-pointer">
                    Daftar
                </button>
            </a>
        </div>
        <div class="hidden lg:flex flex-1 justify-center">
            <div class="w-[865px] flex items-center justify-center">
                <img src="{{ asset('images/large_nobg_logo.png') }}" alt="JAMSELINAS Logo"
                    class="max-h-full max-w-full object-contain" />
            </div>
        </div>
    </div>
</section>
