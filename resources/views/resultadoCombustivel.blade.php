@extends('layouts.principal')

@section('title', 'PW2')

@section('contentSection')
    <div class="max-w-4xl mx-auto p-8 bg-white rounded-lg shadow-2xl">
        <div class="mb-8">
            <p class="text-xl text-center font-semibold text-gray-700">O Valor total a ser gasto na viagem será de:</p>
            <div class="mt-4">
                <input type="text" value="{{ $combustivel .' - R$ '. $gastoFinal }}" class="w-full p-4 text-2xl font-semibold text-center bg-gray-100 border-2 border-gray-300 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" readonly>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('calculo-combustivel.get') }}" class="inline-block px-8 py-3 bg-black text-black font-semibold rounded-lg shadow-lg hover:bg-gray-800 transition-all duration-300">
                Novo Cálculo
            </a>
        </div>
    </div>
@endsection
