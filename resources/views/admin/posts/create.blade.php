@extends('admin.layouts.app')

@section('title', 'Criar Novo Post')

@section('content')
    <h1 class="text-center text-3xl uppercase font-black my-4">Novo Post</h1>

    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf  <!-- É importante incluir o token CSRF para proteger o formulário -->

            @include('admin.posts._partials.form') <!-- Incluindo o formulário parcial -->
        </form>
    </div>

    
@endsection


