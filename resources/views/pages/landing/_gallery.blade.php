<section class="container mx-auto py-16">
    <div class="text-center mb-12">
        <h2 class="font-bold font-poppins text-3xl lg:text-5xl text-jamselinas-primary">GALLERY</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @for ($i = 1; $i <= 8; $i++)
            <div class="rounded-xl shadow overflow-hidden flex items-center justify-center bg-gray-100 aspect-[326/219]">
                <img src="{{ asset('images/gallery/gallery_' . $i . '.png') }}" alt="Gallery {{ $i }}"
                    class="object-cover w-full h-full">
            </div>
        @endfor
    </div>
</section>
