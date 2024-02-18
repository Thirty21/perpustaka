@extends('layouts.main')

@section('content')

    <div class="grid items-center justify-center">
        <h1 class="mt-5 mb-5 font-bold text-3xl text-purple-500 text-center">Detail Book</h1>

            <div class="mx-96 p-5 bg-purple-300 rounded-lg shadow-2xl">

                <h3 class="text-xl font-bold text-black uppercase">{{ $book->title }}</h3>
                {!! strip_tags($book->description, '<p>') !!}
                <div class="mt-5">
                    <span class="text-gray-600 font-bold mb-3">Stock: {{ $book->stock }}</span>
                </div>

            {{-- @endforelse ($show as $item)


            @endforeach --}}

            <div class="mt-5 text-center">
            <a href="{{route('book.borrow', Crypt:: encryptString($book->id))}}" class="bg-blue-300 px-4 py-3 rounded-lg item-center">Borrow</a>
            </div>
        </div>

    </div>

    {{-- <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="mb-10 uppercase tracking-wider text-orange-500 text-lg font-semibold text-center">Deskripsi Book</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 ">
                @foreach ($show as $item)
                    <div class="bg-white border-white shadow-2xl rounded-lg overflow-hidden">
                        <img src="{{ Storage::url($item->image)}}" alt="{{ $item->title }}" class="w-full h-48 object-cover object-center">
                        <div class="p-4">
                            <h3 class="text-xl font-bold text-black uppercase">{{ $item->title }}</h3>
                            <div class="line-clamp-5 text-pretty text-left">
                                {!! strip_tags($item->description, '<p>') !!}
                            </div>
                            <div class="mt-4 flex flex-col text-center">
                                <span class="text-gray-600 font-bold mb-3">Stock: {{ $item->stock }}</span>
                                <a href="{{ route('book.borrow', Crypt:: encryptString($item->id)) }}" class="bg-blue-500 text-white px-4 py-2 rounded-full">Borrow</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
@endsection
