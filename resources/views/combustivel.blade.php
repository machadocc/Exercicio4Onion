@extends('layouts.principal')

@section('title', 'PW2')

@section('contentHeader')
    <div class="text-center mb-12">
        <h1 class="text-5xl font-extrabold text-gray-800">Calcule o Gasto de Combustível</h1>
        <p class="mt-4 text-lg text-gray-500">Preencha as informações abaixo para calcular seu gasto de combustível de forma rápida e prática.</p>
    </div>
@endsection

@section('contentSection')
    <div class="max-w-4xl mx-auto p-10 bg-white rounded-xl shadow-lg">
        <form action="{{ route('calculo-combustivel.post') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col">
                    <label for="combustivel" class="text-xl font-medium text-gray-700 mb-3">Escolha o Combustível</label>
                    <select name="combustivel" id="combustivel" class="px-6 py-4 border-2 border-gray-300 rounded-lg shadow-md focus:ring-2 focus:ring-indigo-500 text-gray-700 text-lg">
                        <option value="" disabled selected>Selecione</option>
                        @foreach ($combustiveis as $combustivel)
                            <option value="{{ $combustivel }}">{{ $combustivel }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col m-2">
                    <label for="valor" class="m-2 text-xl font-medium text-gray-700 mb-3">Valor por Litro (R$)</label>
                    <input type="number" id="valor" name="valor" class="px-6 py-4 border-2 border-gray-300 rounded-lg shadow-md focus:ring-2 focus:ring-indigo-500 text-gray-700 text-lg" step="0.01" required>
                </div>

                <div class="flex flex-col">
                    <label for="km" class="text-xl font-medium text-gray-700 mb-3">Distância (Km)</label>
                    <input type="number" id="km" name="km" class="px-6 py-4 border-2 border-gray-300 rounded-lg shadow-md focus:ring-2 focus:ring-indigo-500 text-gray-700 text-lg" step="0.1" required>
                </div>

                <div class="flex flex-col">
                    <label for="consumo" class="text-xl font-medium text-gray-700 mb-3">Consumo (Km/L)</label>
                    <input type="number" id="consumo" name="consumo" class="px-6 py-4 border-2 border-gray-300 rounded-lg shadow-md focus:ring-2 focus:ring-indigo-500 text-gray-700 text-lg" step="0.01" required>
                </div>
            </div>

            <div class="mt-10 text-center">
                <button type="submit" class="w-full md:w-auto px-8 py-4 bg-indigo-600 text-black font-semibold rounded-lg shadow-xl hover:bg-indigo-700 transition-all duration-300">
                    Calcular Gasto
                </button>
            </div>
        </form>

        <div class="mt-8 text-center">
            <a href="{{ route('home-menu') }}" class="text-indigo-600 hover:text-indigo-700 font-semibold text-lg">
                <button class="px-8 py-4 bg-gray-100 text-indigo-600 rounded-lg shadow-md hover:bg-gray-200 transition-all duration-300">
                    Voltar para a Home
                </button>
            </a>
        </div>
    </div>
@endsection
