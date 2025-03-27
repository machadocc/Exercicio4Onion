@extends('layouts.principal')

@section('title', 'PW2')

@section('contentHeader')
    <div class="text-center mb-12">
        <h1 class="text-5xl font-bold text-gray-900">Bem-vindo, escolha uma opção abaixo</h1>
    </div>
@endsection

@section('contentSection')
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-12 justify-center">
            <div class="bg-white text-black rounded-lg shadow-lg p-8 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                <h2 class="text-3xl font-semibold text-gray-900 mb-6">Sistema de Saúde</h2>
            
                <a href="{{ route('calcula-imc.get') }}" class="inline-block text-center bg-indigo-600 text-black py-3 px-6 rounded-lg text-xl font-semibold hover:bg-indigo-700 transition duration-300">
                    Entrar
                </a>
            </div>

            <div class="bg-white text-black rounded-lg shadow-lg p-8 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                <h2 class="text-3xl font-semibold text-gray-900 mb-6">Cálculo de Combustível</h2>
        
                <a href="{{ route('calculo-combustivel.get') }}" class="inline-block text-center bg-indigo-600 text-black py-3 px-6 rounded-lg text-xl font-semibold hover:bg-indigo-700 hover:text-white transition duration-300">
                    Entrar
                </a>
            </div>
        </div>
    </div>
@endsection
