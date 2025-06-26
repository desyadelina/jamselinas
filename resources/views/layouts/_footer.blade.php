<footer class="w-full bg-jamselinas-footer py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-[420px_1fr_1fr_1fr] gap-8 mb-8">
            <div class="flex flex-col items-center lg:items-start">
                <img src="{{ asset('images/new_logo.png') }}" alt="JAMSELINAS Logo"
                    class="w-[308.17px] object-contain rounded-lg mb-4 mx-auto block">
                <p class="text-black text-center lg:text-left">
                    <span class="font-normal text-[16px]">Banjarmasin Tuan Rumah </span><span
                        class="font-bold text-[18px]">JAMSELINAS XIV 2025</span><span
                        class="font-normal text-[16px]">:</span>
                    <span class="font-normal text-[16px]">Festival Sepeda Lipat Terbesar di Indonesia</span>
                </p>
            </div>
            <div class="flex flex-col justify-start h-full">
                <h3 class="font-bold text-[28px] text-black mb-4 mt-8">Useful Links</h3>
                <div class="flex flex-col gap-2 text-[22px]">
                    <ul class="list-disc list-inside text-black">
                        <li>
                            <a href="{{ route('landing') }}#hero" class="hover:text-jamselinas-primary">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('event-guide') }}" class="hover:text-jamselinas-primary">Event Guide</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-jamselinas-primary">News</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col justify-start h-full">
                <h3 class="font-bold text-[28px] text-black mb-4 mt-8">Event Features</h3>
                <div class="flex flex-col gap-2 text-[22px]">
                    <ul class="list-disc list-inside text-black">
                        <li><a href="#" class="text-black hover:text-jamselinas-primary">Route Map</a></li>
                        <li><a href="#" class="text-black hover:text-jamselinas-primary">Merchandise</a></li>
                        <li><a href="#" class="text-black hover:text-jamselinas-primary">Photo Gallery</a></li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col justify-start h-full">
                <h3 class="font-bold text-[28px] text-black mb-4 mt-8">Information</h3>
                <div class="flex flex-col gap-2 text-[22px]">
                    <a href="tel:08888888888" class="text-black hover:text-jamselinas-primary">08888888888</a>
                    <a href="tel:082155555555" class="text-black hover:text-jamselinas-primary">082155555555</a>
                </div>
            </div>
        </div>

        <div class="border-t border-black/20 pt-6">
            <div class="text-center">
                <p class="text-black text-[16px]">
                    © 2025 JAMSELINAS XIV. All rights reserved.
                </p>
            </div>
        </div>
    </div>

    <script>
        // smooth scroll buat footer anchor links
        document.addEventListener('DOMContentLoaded', function() {
            const footerLinks = document.querySelectorAll('footer a[href*="#"]');

            footerLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    const currentPage = window.location.pathname;

                    // kalo semisal link contains # dan kita di halaman yang sama, maka:
                    if (href.includes('#')) {
                        const [page, section] = href.split('#');

                        // check kalo semisal kita di landing page (either/or empty)
                        const isOnLandingPage = currentPage === '/' || currentPage === '';
                        const targetPage = page.replace(window.location.origin, '');
                        const isTargetLandingPage = !targetPage || targetPage === '/' || targetPage
                            .includes('landing');

                        // kalo semisal kita udah di landing page dan targetnya juga di landing page
                        if (isOnLandingPage && isTargetLandingPage) {
                            e.preventDefault();
                            const targetElement = document.getElementById(section);
                            if (targetElement) {
                                const headerHeight = 96; // h-24 = 96px
                                const targetPosition = targetElement.offsetTop - headerHeight;

                                window.scrollTo({
                                    top: targetPosition,
                                    behavior: 'smooth'
                                });
                            }
                        }
                        // kalo kita ga lagi di landing page, let it navigate normally to landing page with anchor
                    }
                });
            });
        });
    </script>
</footer>
