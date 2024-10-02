<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <!-- No seu arquivo de dashboard, por exemplo: resources/views/dashboard.blade.php -->
    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <h1 class="text-2xl font-semibold">Bem-vindo ao Dashboard</h1>
            <p class="mt-2">Você está conectado como {{ Auth::user()->name }}</p>

            <!-- Botão que redireciona para a página de posts -->
            <a href="{{ route('posts.index') }}" class="mt-4 inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
                Ir para Posts
            </a>
        </div>
    </div>



    </div>

</x-app-layout>