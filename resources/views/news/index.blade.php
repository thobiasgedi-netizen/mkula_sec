@extends('layouts.app')

@section('title', 'News & Updates - Mkula Secondary School')

@section('content')

    <!-- Header Banner -->
    <section class="bg-blue-950 text-white py-12 px-4 border-b-4 border-yellow-500">
        <div class="max-w-7xl mx-auto text-center space-y-2">
            <h1 class="text-3xl md:text-5xl font-extrabold">News & Announcements</h1>
            <p class="text-yellow-400 font-semibold italic">"Strive for better future"</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-12 space-y-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse($newsList as $news)
                <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col md:flex-row border">
                    @if($news->image)
                        @php
                            $extension = strtolower(pathinfo($news->image, PATHINFO_EXTENSION));
                        @endphp

                        {{-- Kama ni Picha --}}
                        @if(in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full md:w-48 h-48 object-cover">
                        
                        {{-- Kama ni PDF Document --}}
                        @elseif(in_array($extension, ['pdf']))
                            <div class="w-full md:w-48 h-48 bg-red-50 flex flex-col items-center justify-center p-4 text-center border-r flex-shrink-0">
                                <span class="text-3xl">📄</span>
                                <span class="text-xs font-bold text-red-600 mt-1 uppercase">PDF Document</span>
                                <a href="{{ asset('storage/' . $news->image) }}" target="_blank" class="mt-2 bg-blue-900 text-white px-3 py-1 rounded text-xs hover:bg-blue-800 transition">
                                    View / Download
                                </a>
                            </div>

                        {{-- Kama ni Video --}}
                        @elseif(in_array($extension, ['mp4', 'webm', 'ogg']))
                            <video class="w-full md:w-48 h-48 object-cover flex-shrink-0" controls>
                                <source src="{{ asset('storage/' . $news->image) }}" type="video/{{ $extension }}">
                                Your browser does not support the video tag.
                            </video>

                        {{-- Faili la Aina Nyingine (Word, Excel, n.k) --}}
                        @else
                            <div class="w-full md:w-48 h-48 bg-blue-50 flex flex-col items-center justify-center p-4 text-center border-r flex-shrink-0">
                                <span class="text-3xl">📎</span>
                                <span class="text-xs font-bold text-blue-600 mt-1 uppercase">{{ $extension }} File</span>
                                <a href="{{ asset('storage/' . $news->image) }}" target="_blank" class="mt-2 bg-blue-900 text-white px-3 py-1 rounded text-xs hover:bg-blue-800 transition">
                                    Download File
                                </a>
                            </div>
                        @endif

                    @else
                        <div class="w-full md:w-48 h-48 bg-gray-200 flex items-center justify-center text-gray-500 font-semibold flex-shrink-0">No Attachment</div>
                    @endif

                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs text-blue-800 font-semibold bg-blue-100 px-2.5 py-1 rounded">
                                {{ $news->created_at->format('d M, Y') }}
                            </span>
                            <h3 class="text-xl font-bold text-gray-900 mt-3">{{ $news->title }}</h3>
                            <div class="text-gray-600 text-sm mt-2 line-clamp-3">
                                {!! $news->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-2 bg-white p-8 rounded-lg shadow text-center text-gray-500">
                    No news updates available at the moment.
                </div>
            @endforelse
        </div>

    </div>

@endsection