<!-- Hero Banner Section -->
<section class="mt-0 pt-16">
    <div class="flex flex-col lg:flex-row min-h-[35vh] gap-0">
        <!-- Left Side - Green Background with Text -->
        <div class="w-full lg:w-1/2 bg-gradient-to-br from-primary-green to-secondary-green flex items-center justify-center p-8 lg:p-12 min-h-[200px] lg:min-h-[250px] m-0">
            <div class="text-center lg:text-left max-w-2xl">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black leading-tight mb-6">
                    <span class="text-black">1-ON-1</span><br>
                    <span class="text-white">MENTORING</span>
                </h1>
                <p class="text-xl md:text-2xl lg:text-3xl font-medium leading-relaxed text-black">
                    Unlock Your Trading Potential with Personalized Coaching<br>Tailored to Your Goals.
                </p>
            </div>
        </div>
        
        <!-- Right Side - Image -->
        <div class="w-full lg:w-1/2 relative min-h-[200px] lg:min-h-[250px] m-0">
            <img src="assets/images/banner.webp" alt="Trading Mentor" class="w-full h-full object-cover">
        </div>
    </div>
</section>

<!-- Trading Session Card -->
<section class="relative -mt-16 z-10 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="trading-session-card bg-white rounded-2xl shadow-xl border-4 border-primary-green/20 p-6 md:p-8 text-center max-w-4xl w-full">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-4 tracking-widest">
                    START TRADING SESSION
                </h2>
                <p class="text-lg md:text-xl lg:text-2xl font-semibold text-gray-900 mb-4 tracking-wider">
                    ONLY <span class="text-primary-green font-bold text-xl md:text-2xl">20 SLOTS</span> AVAILABLE.
                </p>
                <div class="bg-primary-green/10 rounded-lg p-4 md:p-5">
                    <p class="text-base md:text-lg text-gray-700 font-medium tracking-wide">
                        Limited spots available for personalized trading mentorship
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Telegram Join Section -->
<section class="py-8 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Top Border with Telegram Icon -->
        <div class="border-t-4 border-primary-blue pt-6 mb-6">
            <div class="flex items-center justify-center mb-4">
                <div class="bg-primary-blue rounded-full p-3 mr-4">
                    <i class="fab fa-telegram text-white text-2xl"></i>
                </div>
                <div class="text-center">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900">CLICK HERE TO JOIN</h3>
                    <p class="text-gray-600 text-sm md:text-base">Receive Free Signals</p>
                </div>
            </div>
        </div>
        
        <!-- Bottom Border -->
        <div class="border-b-4 border-primary-blue pb-6 mb-6"></div>
        
        <!-- Down Arrow -->
        <div class="text-center mb-6">
            <div class="bg-teal-400 rounded-full p-4 inline-block">
                <i class="fas fa-arrow-down text-white text-2xl"></i>
            </div>
        </div>
        
        <!-- Join Telegram Button -->
        <div class="text-center mb-8">
            <a href="#telegram" class="telegram-join-button block w-full bg-primary-blue hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg text-xl transition-colors shadow-lg hover:shadow-xl">
                <i class="fab fa-telegram mr-3"></i>
                JOIN TELEGRAM
            </a>
        </div>
        
        <!-- Description Text -->
        <div class="text-center">
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                Join and Start trade session <strong>FREE</strong> on Telegram<br>
                with over <strong>20,000</strong> users by clicking the button<br>
                <strong>without paying anything!</strong>
            </p>
        </div>
    </div>
</section>

<!-- Image Slider Section -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 text-gray-900">
            Join and Start trade session <span class="text-primary-green">FREE</span> on Telegram with over <span class="text-primary-green">20,000 users</span> by clicking the button without paying anything!
        </h2>
        <div class="relative w-full overflow-hidden rounded-2xl shadow-lg" id="slider-container">
            <div class="flex transition-transform duration-700" id="slider-track">
                <img src="assets/images/1.jpeg" alt="Slider 1" class="w-full object-cover flex-shrink-0" style="max-height: 420px;">
                <img src="assets/images/2.jpeg" alt="Slider 2" class="w-full object-cover flex-shrink-0" style="max-height: 420px;">
                <img src="assets/images/3.jpeg" alt="Slider 3" class="w-full object-cover flex-shrink-0" style="max-height: 420px;">
                <img src="assets/images/4.jpeg" alt="Slider 4" class="w-full object-cover flex-shrink-0" style="max-height: 420px;">
            </div>
            <!-- Slider Controls -->
            <button id="slider-prev" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-700 rounded-full p-2 shadow-md z-10"><i class="fas fa-chevron-left"></i></button>
            <button id="slider-next" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-700 rounded-full p-2 shadow-md z-10"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
    <script>
        // Simple slider logic
        const sliderTrack = document.getElementById('slider-track');
        const images = sliderTrack.querySelectorAll('img');
        const prevBtn = document.getElementById('slider-prev');
        const nextBtn = document.getElementById('slider-next');
        let current = 0;
        function updateSlider() {
            sliderTrack.style.transform = `translateX(-${current * 100}%)`;
        }
        prevBtn.onclick = () => {
            current = (current - 1 + images.length) % images.length;
            updateSlider();
        };
        nextBtn.onclick = () => {
            current = (current + 1) % images.length;
            updateSlider();
        };
        // Optional: auto-slide
        setInterval(() => {
            current = (current + 1) % images.length;
            updateSlider();
        }, 5000);
    </script>
</section>

