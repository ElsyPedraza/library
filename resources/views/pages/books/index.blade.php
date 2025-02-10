@extends('layout.app')

@section('title', 'Lista Libri')

@section('content')

    <div class="container mx-auto px-4 py-24">
        <h1 class="text-4xl font-bold py-5">Lista dei Libri</h1>

        <ul class="space-y-4">
            @foreach($books as $book)
                <li class="bg-white p-6 rounded-lg shadow-md flex flex-col sm:flex-row justify-between items-center">
                    <div>
                        <h2 class="text-xl font-semibold text-indigo-700">{{ $book->title }}</h2>
                        <p class="text-gray-600">Autore: <span class="font-medium">{{ $book->author }}</span></p>
                        <p class="text-gray-600">Anno: <span class="font-medium">{{ $book->year }}</span></p>
                        <p class="{{ $book->available ? 'text-green-600' : 'text-red-600' }}">
                            {{ $book->available ? 'Disponibile' : 'Non disponibile' }}
                        </p>
                    </div>

                    <a href="{{ url('/books/' . $book->id) }}" class="mt-4 flex gap-2 sm:mt-0 px-4 py-2 bg-indigo-600 text-white rounded-md shadow-md hover:bg-indigo-700 transition">
                        <x-lucide-eye class="w-6 h-6 ml-2" />Visualizza
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
