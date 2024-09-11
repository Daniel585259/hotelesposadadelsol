@extends('layouts.app')

@section('titulo', 'Mis productos | Crear producto')
@section('cabecera', 'Crear producto')

@section('contenido')
    <div class="flex justify-center my-6">
        <div class="card bg-base-100 w-96 shadow-2xl">
            <form class="card-body" action="{{ route('productos.store') }}" method="POST">
                @csrf
                {{-- Nombre --}}
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Nombre</span>
                    </label>
                    <input type="text" name="nombre" placeholder="Nombre del producto" class="input input-bordered" required />
                </div>
                {{-- Descripción --}}
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Descripción</span>
                    </label>
                    <input type="text" name="descripcion" placeholder="Descripción" class="input input-bordered" />
                </div>
                {{-- Precio --}}
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Precio</span>
                    </label>
                    <input type="number" name="precio" placeholder="Precio" class="input input-bordered" required />
                </div>
                {{-- Stock --}}
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Stock</span>
                    </label>
                    <input type="number" name="stock" placeholder="Stock" class="input input-bordered" required />
                </div>
                {{-- botones --}}
                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary">Crear producto</button>
                    <a href="{{ route('productos.index')}}" class="btn btn-outline mt-4" >Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection