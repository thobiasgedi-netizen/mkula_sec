@extends('layouts.app')

@section('title', 'Exam Results - Mkula Secondary School')

@section('content')

    <!-- Header Banner -->
    <section class="bg-blue-950 text-white py-12 px-4 border-b-4 border-yellow-500">
        <div class="max-w-7xl mx-auto text-center space-y-2">
            <h1 class="text-3xl md:text-5xl font-extrabold">Examination Results</h1>
            <p class="text-yellow-400 font-semibold italic">"Strive for better future"</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-12 space-y-8">
        
        <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-yellow-500 space-y-6">
            <div class="border-b pb-4">
                <h2 class="text-2xl font-bold text-gray-800">Academic & Examination Results</h2>
                <p class="text-gray-600 text-sm mt-1">Check official internal school results and national examination links.</p>
            </div>

            <div class="space-y-4">
                @forelse($examResults as $result)
                    <div class="p-4 bg-gray-50 rounded-lg border flex flex-col md:flex-row justify-between items-start md:items-center gap-4 hover:border-yellow-500 transition">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">{{ $result->title }}</h3>
                            <div class="flex items-center gap-3 mt-1 text-sm text-gray-500">
                                <span class="bg-blue-100 text-blue-800 font-semibold text-xs px-2.5 py-0.5 rounded">
                                    {{ $result->form_level }}
                                </span>
                                <span>Year: <strong class="text-gray-700">{{ $result->year }}</strong></span>
                            </div>
                        </div>

                        <div>
                            @if($result->file_path)
                                <a href="{{ asset('storage/' . $result->file_path) }}" target="_blank" class="bg-blue-900 hover:bg-blue-800 text-white text-sm font-bold px-5 py-2.5 rounded shadow transition flex items-center gap-2">
                                    <span>📊</span> Download PDF Result
                                </a>
                            @elseif($result->external_link)
                                <a href="{{ $result->external_link }}" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 text-blue-950 text-sm font-bold px-5 py-2.5 rounded shadow transition flex items-center gap-2">
                                    <span>🔗</span> Open NECTA Link &rarr;
                                </a>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="text-center py-8 text-gray-500">
                        No examination results published yet.
                    </div>
                @endforelse
            </div>
        </div>

    </div>

@endsection