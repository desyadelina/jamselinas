<section class="container mx-auto py-16">
    <div class="text-center mb-12">
        <h2 class="font-bold text-3xl lg:text-5xl text-jamselinas-primary">RIDERS STORY</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 3; $i++)
            <div class="bg-white rounded-2xl border border-black/10 shadow p-6 flex flex-col min-h-[320px]">
                <div class="flex items-center mb-4">
                    <div
                        class="w-20 h-20 rounded-full bg-gradient-to-br from-jamselinas-primary to-jamselinas-secondary flex items-center justify-center text-white font-bold text-2xl mr-4">
                        U</div>
                    <div>
                        <span class="text-black text-base">@username{{ $i }}</span>
                        <h4 class="text-black text-lg font-bold">Username{{ $i }}</h4>
                    </div>
                </div>
                <div class="flex-1">
                    <p class="text-black text-base text-justify leading-relaxed">
                        Testimoni peserta {{ $i }}. Kesan dan pengalaman mengikuti event Jamselinas.
                    </p>
                </div>
            </div>
        @endfor
    </div>
</section>
