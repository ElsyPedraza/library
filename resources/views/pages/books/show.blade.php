@extends('layout.app')

@section('title', 'Dettaglio Libro')

@section('content')
    <div class="container mx-auto px-4 py-24">
        <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
            <h1 class="text-3xl font-bold text-indigo-700 text-center mb-6">{{ $book->title }}</h1>
            <div class="space-y-4">
                <p class="text-lg"><strong class="text-indigo-600">Autore:</strong> {{ $book->author }}</p>
                <p class="text-lg"><strong class="text-indigo-600">Anno di Pubblicazione:</strong> {{ $book->year }}</p>
                <p class="text-lg">
                    <strong class="text-indigo-600">Disponibilità:</strong>
                    <span class="{{ $book->available ? 'text-green-600' : 'text-red-600' }}">
                        {{ $book->available ? 'Disponibile' : 'Non disponibile' }}
                    </span>
                </p>
            </div>
            <div class="text-center mt-6">
                <a href="{{ url('/books') }}" 
                   class="mt-6 inline-flex items-center px-6 py-3 bg-indigo-700 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-800 transition">
                   <x-lucide-arrow-big-left-dash class="w-6 h-6 ml-2" /> 
                   Torna alla lista
                </a>
            </div>
        </div>
    </div>
@endsection
