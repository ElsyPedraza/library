@extends('layout.app')

@section('title', 'Homepage')

@section('content')
    <section class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white text-center py-32">
        <div class="container mx-auto">
            <img src="{{ asset('pix/imgBanner.png') }}" alt="banner" class="h-28 mx-auto">
            <h1 class="text-4xl font-bold">Benvenuto nella Biblioteca</h1>
            <p class="mt-4 text-lg">Esplora la nostra vasta collezione di libri e scopri nuovi autori.</p>
            <a href="{{ url('/books') }}" class="mt-6 inline-flex items-center px-6 py-3 bg-indigo-700 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-800 transition">
                Scopri i Libri 
                <x-lucide-move-right class="w-6 h-6 ml-2" />
            </a>
            
        </div>
    </section>
    <section class="container mx-auto mt-12 py-6">
        <h2 class="text-3xl font-semibold text-slate-800 text-center">Alcuni dei Nostri Libri</h2>
        <p class="text-center text-gray-500">Dai un'occhiata alla nostra libreria</p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-bold text-slate-800">Il Nome della Rosa</h3>
                <p class="text-gray-500">Umberto Eco</p>
                <a href="{{ url('/books/1') }}" class="text-violet-700 hover:underline mt-2 block">Leggi di più</a>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-bold text-slate-800">1984</h3>
                <p class="text-gray-500">George Orwell</p>
                <a href="{{ url('/books/2') }}" class="text-violet-700 hover:underline mt-2 block">Leggi di più</a>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-bold text-slate-800">I Promessi Sposi</h3>
                <p class="text-gray-500">Alessandro Manzoni</p>
                <a href="{{ url('/books/3') }}" class="text-violet-700 hover:underline mt-2 block">Leggi di più</a>
            </div>
        </div>
    </section>
@endsection
