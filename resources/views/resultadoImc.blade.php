@extends('layouts.principal')

@section('title', 'PW2')

@section('contentHeader')
    <div class="text-center mb-8">
        <h1 class="text-4xl font-semibold text-gray-800">Resultado</h1>
    </div>
@endsection

@section('contentSection')
    <div class="max-w-4xl mx-auto px-4 py-8 bg-white shadow-md rounded-lg">
        <div class="space-y-6">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="name" class="text-sm font-medium text-gray-700">Nome:</label>
                    <input disabled value="{{ $nome }}" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label for="date" class="text-sm font-medium text-gray-700">Idade:</label>
                    <input disabled value="{{ $idade }}" type="number" id="date" name="date" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="peso" class="text-sm font-medium text-gray-700">Peso (kg):</label>
                    <input disabled value="{{ $peso }}" type="number" id="peso" name="peso" step="0.1" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label for="altura" class="text-sm font-medium text-gray-700">Altura (m):</label>
                    <input disabled value="{{ $altura }}" type="number" id="altura" name="altura" step="0.01" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="imc" class="text-sm font-medium text-gray-700">IMC:</label>
                    <input disabled value="{{ $imc }}" type="text" id="imc" name="imc" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                @if ($retornaSono)
                    <div>
                        <label for="sono" class="text-sm font-medium text-gray-700">Horas de sono:</label>
                        <input disabled value="{{ $sono }}" type="text" id="sono" name="sono" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                @endif
            </div>
        </div>

        <div class="flex justify-center mt-6">
            <a href="{{ route('calcula-imc.get') }}" class="px-6 py-2 text-black bg-indigo-600 hover:bg-indigo-700 rounded-md shadow-sm text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Novo Cálculo
            </a>
        </div>
    </div>
@endsection
