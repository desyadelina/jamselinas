<section id="gallery" class="container mx-auto py-16 px-4">
    <div class="text-center mb-8 lg:mb-12">
        <h2 class="font-bold font-poppins text-3xl lg:text-5xl text-jamselinas-primary">GALLERY</h2>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4">
        @for ($i = 1; $i <= 8; $i++)
            <div
                class="rounded-lg md:rounded-xl shadow overflow-hidden bg-gray-100 aspect-square md:aspect-[326/219] cursor-pointer hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/gallery/gallery_' . $i . '.png') }}" alt="Gallery {{ $i }}"
                    class="object-cover w-full h-full hover:scale-105 transition-transform duration-300">
            </div>
        @endfor
    </div>
</section>
