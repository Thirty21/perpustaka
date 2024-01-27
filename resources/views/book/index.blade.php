@extends('layouts.main')


{{-- @section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold text-center">Perpustakan Buku</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach ($books as $item)
                <div class="mt-8 border p-5">
                {{ $item->title }}
                {!! strip_tags($item->description, '<p>') !!}
                {{ $item->stock }}
                </div>
                @endforeach

            </div>
        </div>
     </div>

                @endsection --}}

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="mb-10 uppercase tracking-wider text-orange-500 text-lg font-semibold text-center">Perpustakan Buku</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach ($books as $item)
                    <div class="bg-white border rounded-lg overflow-hidden shadow-md">
                        <img src="{{ $item->cover_url }}" alt="{{ $item->title }}" class="w-full h-48 object-cover object-center">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ $item->title }}</h3>
                            <p class="text-gray-600">  {!! strip_tags($item->description, '<p>') !!}</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-gray-500">Stock: {{ $item->stock }}</span>
                                <a href="{{ route('book.borrow', $item->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-full">Borrow</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection



