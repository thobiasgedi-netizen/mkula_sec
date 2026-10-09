@extends('layouts.app')

@section('title', 'Mkula Secondary School - Home')

@section('content')

    <!-- 1. Hero Image Slider Section -->
    <section class="relative w-full h-[400px] md:h-[550px] overflow-hidden bg-gray-950 border-b-4 border-yellow-500">
        
        <!-- Slider Images Wrapper -->
        <div id="heroSlider" class="flex transition-transform duration-700 ease-in-out w-full h-full">
            
            <!-- Slide 1 -->
            <div class="w-full h-full flex-shrink-0 relative flex items-center justify-center bg-black">
                <img src="{{ asset('images/hero1.jpg') }}" class="w-full h-full object-contain md:object-cover object-top" alt="Mkula Secondary School">
                <div class="absolute inset-0 bg-blue-950/65"></div>
            </div>

            <!-- Slide 2 -->
            <div class="w-full h-full flex-shrink-0 relative flex items-center justify-center bg-black">
                <img src="{{ asset('images/hero2.jpg') }}" class="w-full h-full object-contain md:object-cover object-top" alt="Mkula Secondary Students">
                <div class="absolute inset-0 bg-blue-950/65"></div>
            </div>

        </div>

        <!-- Hero Content Overlay -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-4 z-10 space-y-6">
            <span class="bg-yellow-500 text-blue-950 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow">
                Motto: Strive for better future
            </span>
            <h1 class="text-3xl md:text-6xl font-extrabold tracking-tight drop-shadow-lg">
                Welcome to <span class="text-yellow-400">Mkula Secondary School</span>
            </h1>
            <p class="text-base md:text-xl text-blue-100 max-w-3xl mx-auto font-light leading-relaxed drop-shadow">
                Nurturing academic excellence, moral discipline, and self-reliance to empower the leaders of tomorrow.
            </p>
            <div class="pt-2 flex flex-wrap justify-center gap-4">
                <a href="{{ route('joining.index') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold px-6 py-3 rounded-lg shadow-lg transition transform hover:-translate-y-0.5">
                    Download Joining Instructions
                </a>
                <a href="{{ route('results.index') }}" class="bg-yellow-500 hover:bg-yellow-600 text-blue-950 font-bold px-6 py-3 rounded-lg shadow-lg transition transform hover:-translate-y-0.5">
                    View Exam Results
                </a>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button type="button" onclick="prevSlide()" class="absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-black/50 hover:bg-black/80 text-white p-3 rounded-full transition">
            ❮
        </button>
        <button type="button" onclick="nextSlide()" class="absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-black/50 hover:bg-black/80 text-white p-3 rounded-full transition">
            ❯
        </button>

    </section>

    <!-- Main Body Container -->
    <div class="max-w-7xl mx-auto px-4 py-12 space-y-12">

        <!-- 2. Quick Highlights -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-900 flex items-center space-x-4">
                <div class="bg-blue-100 p-3 rounded-full text-blue-900 font-bold text-2xl">🎓</div>
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">Academic Excellence</h3>
                    <p class="text-gray-600 text-sm">O-Level & A-Level Girls High School offering HKL & HGL combinations.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-yellow-500 flex items-center space-x-4">
                <div class="bg-yellow-100 p-3 rounded-full text-yellow-900 font-bold text-2xl">🏆</div>
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">Discipline & Values</h3>
                    <p class="text-gray-600 text-sm">Building character, responsibility, and leadership qualities.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-600 flex items-center space-x-4">
                <div class="bg-green-100 p-3 rounded-full text-green-900 font-bold text-2xl">📚</div>
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">Serene Environment</h3>
                    <p class="text-gray-600 text-sm">Located in Mkula Village, Busega District, Simiyu Region.</p>
                </div>
            </div>
        </section>

        <!-- 3. Headmaster's Welcome & Recent News -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="md:col-span-2 space-y-6">
                <!-- Headmaster's Welcome Note -->
                <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-blue-900 space-y-4">
                    <h2 class="text-2xl font-bold text-gray-800 border-b pb-3">Headmaster's Welcome Message</h2>
                    <p class="text-gray-600 leading-relaxed">
                        It is my great pleasure to welcome you to the official website of <strong>Mkula Secondary School</strong>. Driven by our motto, <em>"Strive for better future"</em>, our institution is dedicated to providing an inspiring and safe learning environment where every student is supported to achieve their full academic and personal potential.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Through this digital platform, parents, students, and stakeholders can access up-to-date school announcements, download joining instructions, and check official examination results with ease.
                    </p>
                </div>

                <!-- Quick School Profile -->
                <div class="bg-blue-900 text-white p-8 rounded-lg shadow-md flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="space-y-3">
                        <h3 class="text-xl font-bold text-yellow-400">About Mkula Secondary School</h3>
                        <p class="text-blue-100 text-sm leading-relaxed">
                            Located in Mkula Village, Busega District (Simiyu Region), Mkula Secondary School provides quality <strong>O-Level education</strong> and an <strong>A-Level High School for Girls</strong> offering <strong>HKL</strong> and <strong>HGL</strong> combinations.
                        </p>
                        <div>
                            <a href="{{ route('about') }}" class="text-yellow-400 font-bold text-xs hover:underline inline-flex items-center gap-1">
                                Read Full School Profile &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Sidebar / Latest Updates with Alert Style -->
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-yellow-500 space-y-4">
                    <div class="flex justify-between items-center border-b pb-3">
                        <div class="flex items-center space-x-2">
                            <span class="relative flex h-3 w-3">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                            </span>
                            <h3 class="text-xl font-bold text-gray-800">Latest Updates</h3>
                        </div>
                        <a href="{{ route('news.index') }}" class="text-blue-600 hover:underline text-xs font-bold">View All &rarr;</a>
                    </div>

                    <div class="space-y-3">
                        @forelse($latestNews ?? [] as $news)
                            <a href="{{ route('news.index') }}" class="block bg-yellow-50 hover:bg-yellow-100 border-l-4 border-yellow-500 p-3 rounded transition shadow-sm">
                                <div class="flex justify-between items-center">
                                    <span class="text-[10px] font-bold uppercase tracking-wider bg-red-600 text-white px-2 py-0.5 rounded">New Alert</span>
                                    <span class="text-xs text-gray-500">{{ $news->created_at->format('d M, Y') }}</span>
                                </div>
                                <h4 class="font-bold text-gray-900 text-sm mt-1 line-clamp-1">{{ $news->title }}</h4>
                                <p class="text-xs text-gray-600 mt-1 line-clamp-2">{!! strip_tags($news->content) !!}</p>
                            </a>
                        @empty
                            <div class="p-4 bg-gray-50 rounded text-center text-gray-500 text-sm">
                                No new updates at the moment.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- JavaScript Slider -->
    <script>
        let currentSlide = 0;
        const totalSlides = 2;

        function updateSlider() {
            const slider = document.getElementById('heroSlider');
            if (slider) {
                slider.style.transform = `translateX(-${currentSlide * 100}%)`;
            }
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        setInterval(nextSlide, 4000);
    </script>

@endsection