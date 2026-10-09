@extends('layouts.app')

@section('title', 'About Us - Mkula Secondary School')

@section('content')

    <!-- Header Banner -->
    <section class="bg-blue-950 text-white py-12 px-4 border-b-4 border-yellow-500">
        <div class="max-w-7xl mx-auto text-center space-y-2">
            <h1 class="text-3xl md:text-5xl font-extrabold">About Mkula Secondary School</h1>
            <p class="text-yellow-400 font-semibold italic">"Strive for better future"</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-12 space-y-12">

        <!-- 1. School History & Overview -->
        <section class="bg-white p-8 rounded-lg shadow-md border-l-4 border-blue-900 space-y-4">
            <h2 class="text-2xl font-bold text-gray-800 border-b pb-3">School Overview & Academic Levels</h2>
            <p class="text-gray-600 leading-relaxed">
                <strong>Mkula Secondary School</strong> is a government secondary institution located in Mkula Village, Busega District within the Simiyu Region (P.O. Box 157, Busega). Driven by our motto, <em>"Strive for better future"</em>, we provide an inclusive and supportive academic environment.
            </p>
            <p class="text-gray-600 leading-relaxed">
                The school offers education at two main levels:
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-2 pl-4">
                <li><strong>O-Level (Form 1 – Form 4):</strong> Co-education (Boys & Girls) following the national NECTA curriculum.</li>
                <li><strong>A-Level (Form 5 – Form 6):</strong> Girls High School offering Arts combinations: <strong>HKL</strong> (History, Kiswahili, Language) and <strong>HGL</strong> (History, Geography, Language).</li>
            </ul>
        </section>

        <!-- 2. Vision, Mission & Core Values -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-blue-900 space-y-3">
                <div class="text-3xl text-blue-900 font-bold">👁️</div>
                <h3 class="text-xl font-bold text-gray-800">Our Vision</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    To be a premier secondary school in Simiyu Region producing well-educated, highly disciplined, creative, and empowered female and male leaders.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-yellow-500 space-y-3">
                <div class="text-3xl text-yellow-600 font-bold">🎯</div>
                <h3 class="text-xl font-bold text-gray-800">Our Mission</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    To deliver quality secondary education at O-Level and A-Level through effective teaching, leadership development, and character building.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-green-600 space-y-3">
                <div class="text-3xl text-green-600 font-bold">⭐</div>
                <h3 class="text-xl font-bold text-gray-800">Core Values</h3>
                <ul class="text-gray-600 text-sm space-y-2 list-disc list-inside">
                    <li>Academic Excellence</li>
                    <li>Discipline & Integrity</li>
                    <li>Girls Empowerment & Equality</li>
                    <li>Patriotism & Self-Reliance</li>
                </ul>
            </div>

        </section>

        <!-- 3. Academic Programs Highlight -->
        <section class="bg-white p-8 rounded-lg shadow-md border-t-4 border-yellow-500 space-y-6">
            <h2 class="text-2xl font-bold text-gray-800 border-b pb-3">Offered Academic Combinations (A-Level Girls)</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-5 bg-blue-50 rounded-lg border border-blue-200 flex items-start space-x-4">
                    <span class="text-3xl">📖</span>
                    <div>
                        <h4 class="font-bold text-blue-950 text-lg">HKL Combination</h4>
                        <p class="text-gray-600 text-sm mt-1">History, Kiswahili, and English Language. Designed for students aspiring for careers in Law, Media, Public Administration, and Education.</p>
                    </div>
                </div>

                <div class="p-5 bg-yellow-50 rounded-lg border border-yellow-200 flex items-start space-x-4">
                    <span class="text-3xl">🌍</span>
                    <div>
                        <h4 class="font-bold text-blue-950 text-lg">HGL Combination</h4>
                        <p class="text-gray-600 text-sm mt-1">History, Geography, and English Language. Tailored for careers in Environmental Studies, Urban Planning, International Relations, and Social Sciences.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection