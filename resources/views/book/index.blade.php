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

{{-- @section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
              @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-72 float-right" role="alert">
                    <strong class="font-bold">Stock Habis!</strong>
                    <span class="block sm:inline">{{session('error')}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    </span>
                  </div>
                @endif
            <h2 class="mb-10 uppercase tracking-wider text-orange-500 text-lg font-semibold text-center">Perpustakan Buku</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">



                @foreach ($books as $item)
                    <div class="bg-white border-white shadow-2xl rounded-lg overflow-hidden">
                        <img src="{{ Storage::url($item->image)}}" alt="{{ $item->title }}" class="w-full h-48 object-cover object-center">
                        <div class="p-4">
                            <h3 class="text-xl font-bold text-black uppercase">{{ $item->title }}</h3>
                            <div class="line-clamp-5 text-pretty text-left">
                                {!! strip_tags($item->description, '<p>') !!}
                            </div>
                            <div class="mt-4 flex flex-col text-center">
                                <span class="text-gray-600 font-bold mb-3">Stock: {{ $item->stock }}</span>
                                <a href="{{ route('book.show', Crypt:: encryptString($item->id)) }}" class="bg-blue-500 text-white px-4 py-2 rounded-full">Show</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection --}}


<section class="h-screen bg-slate-500">
    {{-- @if(session('success')) --}}
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3  rounded relative w-72 float-right" role="alert">
        <strong class="font-bold">Meminjam Berhasil!</strong>
        <span class="block sm:inline">{{session('success')}}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        </span>
      </div>
    {{-- @endif --}}
    @if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-72 float-right" role="alert">
        <strong class="font-bold">Stock Habis!</strong>
        <span class="block sm:inline">{{session('error')}}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        </span>
      </div>
    @endif

    <div class="px-11 py-3">
            <h1 class="text-white font-bold text-2xl">Perpustaka</h1>

    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2">
        @foreach ($books as $book)
        <div class="mx-8">
            <a href="{{ route('book.show', Crypt:: encryptString($book->id)) }}">
                <img src="{{ Storage::url($book->image)}}" alt="{{ $book->title }}" class="w-[146px] h-[207px] shadow-xl rounded-xl object-cover object-center">
                <h1 class="text-white font-bold text-xl">{{ $book->title }}</h1>
            </a>
         </div>
        @endforeach


    </div>
</section>
