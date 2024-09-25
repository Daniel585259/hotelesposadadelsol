@extends('layouts.app')
@section('titulo','Dashboard')
@section('cabecera', 'Dashboard')
@section('contenido')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
            <div class="hero min-h-screen bg-base-200 rounded-2xl">
                <div class="hero-content text-center">
                  <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Hola {{ auth()->user()->name }}</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <a href="{{ route('productos.index') }}" class="btn btn-primary">Consultar productos</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
