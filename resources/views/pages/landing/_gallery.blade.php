<section class="container mx-auto py-16">
    <div class="text-center mb-12">
        <h2 class="font-bold text-3xl lg:text-5xl text-jamselinas-primary">GALLERY</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @for ($i = 1; $i <= 8; $i++)
            <div class="h-52 bg-gradient-to-br from-jamselinas-primary to-jamselinas-secondary rounded-xl shadow flex items-center justify-center text-white font-bold text-lg">
                Gallery {{ $i }}
            </div>
        @endfor
    </div>
</section>