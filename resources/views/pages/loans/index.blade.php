@extends('layout.app')

@section('title', 'Lista Prestiti')

@section('content')
    <div class="container mx-auto px-4 py-24">
        <h1 class="text-4xl font-bold py-5">Lista dei Prestiti</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Libro</th>
                        <th class="py-3 px-4 text-left">Utente</th>
                        <th class="py-3 px-4 text-left">Data Prestito</th>
                        <th class="py-3 px-4 text-left">Data Restituzione</th>
                        <th class="py-3 px-4 text-center">Stato</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach($loans as $loan)
                        <tr class="border-t">
                            <td class="py-3 px-4">{{ $loan->book_title }}</td>
                            <td class="py-3 px-4">{{ $loan->user_name }}</td>
                            <td class="py-3 px-4">{{ $loan->loan_date }}</td>
                            <td class="py-3 px-4">
                                {{ $loan->return_date ?? 'Non ancora restituito' }}
                            </td>
                            <td class="py-3 px-4 text-center {{ $loan->returned ? 'text-green-600' : 'text-red-600' }}">
                                {{ $loan->returned ? 'Restituito' : 'In prestito' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
