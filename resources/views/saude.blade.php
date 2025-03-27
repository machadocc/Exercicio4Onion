@extends('layouts.principal')

@section('title', 'PW2')

@section('contentHeader')
    <div class="text-center mb-12">
        <h1 class="text-5xl font-bold text-gray-900">Calcule o seu IMC - Sono</h1>
    </div>
@endsection

@section('contentSection')
    <form action="{{ route('calcula-imc.post') }}" method="POST" class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-2xl">
        @csrf

        <div class="mb-6">
            <label for="name" class="block text-lg font-semibold text-gray-700 mb-2">Nome:</label>
            <input id="name" name="name" type="text" class="w-full px-6 py-3 border-2 border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-lg" required>
        </div>

        <div class="mb-6">
            <label for="date" class="block text-lg font-semibold text-gray-700 mb-2">Data de Nascimento:</label>
            <input type="date" id="date" name="date" class="w-full px-6 py-3 border-2 border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-lg" required>
        </div>

        <div class="mb-6">
            <label for="peso" class="block text-lg font-semibold text-gray-700 mb-2">Peso (kg):</label>
            <input type="number" id="peso" name="peso" step="0.1" class="w-full px-6 py-3 border-2 border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-lg" required>
        </div>

        <div class="mb-6">
            <label for="altura" class="block text-lg font-semibold text-gray-700 mb-2">Altura (m):</label>
            <input type="number" id="altura" name="altura" step="0.01" class="w-full px-6 py-3 border-2 border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-lg" required>
        </div>

        <div class="mb-6">
            <label for="calculaSono" class="block text-lg font-semibold text-gray-700 mb-2">Deseja realizar o cálculo de sono?</label>
            <input type="checkbox" name="calculaSono" id="calculaSono" class="focus:ring-2 focus:ring-indigo-500 text-lg">
        </div>

        <div id="trSono" class="mb-6 hidden">
            <label for="sono" class="block text-lg font-semibold text-gray-700 mb-2">Informe a média de sono diária (h):</label>
            <input type="number" id="sono" name="sono" class="w-full px-6 py-3 border-2 border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-lg">
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full py-3 bg-black text-black font-semibold rounded-lg shadow-xl hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300">
                Calcular
            </button>
        </div>
    </form>

    <div class="mt-8 text-center">
        <a href="{{ route('home-menu') }}" class="inline-block px-8 py-3 bg-gray-200 text-black font-semibold rounded-lg shadow-md hover:bg-gray-300 transition-all duration-300">
            Voltar para a Home
        </a>
    </div>
@endsection

@section('scripts')
    <script>
        // Mostrar/Esconder campo de sono baseado no checkbox
        const calculaSono = document.getElementById('calculaSono');
        const trSono = document.getElementById('trSono');

        calculaSono.addEventListener('change', () => {
            trSono.classList.toggle('hidden', !calculaSono.checked);
        });
    </script>
@endsection
