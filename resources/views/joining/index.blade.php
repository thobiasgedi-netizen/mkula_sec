@extends('layouts.app')

@section('title', 'Joining Instructions - Mkula Secondary School')

@section('content')

    <!-- Header Banner -->
    <section class="bg-blue-950 text-white py-12 px-4 border-b-4 border-yellow-500">
        <div class="max-w-7xl mx-auto text-center space-y-2">
            <h1 class="text-3xl md:text-5xl font-extrabold">Joining Instructions</h1>
            <p class="text-yellow-400 font-semibold italic">"Strive for better future"</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-12 space-y-8">
        
        <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-green-600 space-y-6">
            <div class="border-b pb-4">
                <h2 class="text-2xl font-bold text-gray-800">Download Official Admission Forms</h2>
                <p class="text-gray-600 text-sm mt-1">Select and download the appropriate joining instruction form for your level.</p>
            </div>

            <div class="space-y-4">
                @forelse($joiningInstructions as $joining)
                    <div class="p-4 bg-gray-50 rounded-lg border flex flex-col md:flex-row justify-between items-start md:items-center gap-4 hover:border-green-500 transition">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">{{ $joining->title }}</h3>
                            <p class="text-sm text-gray-500">Academic Year: <span class="font-semibold text-gray-700">{{ $joining->academic_year }}</span></p>
                        </div>
                        <a href="{{ asset('storage/' . $joining->file_path) }}" target="_blank" class="bg-green-600 hover:bg-green-700 text-white text-sm font-bold px-5 py-2.5 rounded shadow transition flex items-center gap-2">
                            <span>📄</span> Download PDF
                        </a>
                    </div>
                @empty
                    <div class="text-center py-8 text-gray-500">
                        No joining instruction forms uploaded at the moment.
                    </div>
                @endforelse
            </div>
        </div>

    </div>

@endsection