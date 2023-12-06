@extends('layout.app')

@section('titulo')
@endsection

@section('contenido')

<div class="flex justify-center my-10">
    <div class="p-6 mt-5 border rounded-lg md:w-3/12 bg-yellow">
        <form  action="{{route('register')}}" method="POST" novalidate>
            @csrf
            <div class="mb-5 text-left ">
                <h1 class="text-2xl font-bold text-slate-200">REGISTRAR USUARIO</h1>
                <br><label for="name" class="text-slate-200">Nombre</label>
                <input type="text" placeholder="Ingrese su nombre" name="name" id="name" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror " value="{{ old('name') }}">
                @error('name')
                    <p class="text-center text-white bg-red-600 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5 text-left">
                <label for="identification" class="block mb-2 font-bold text-slate-200">Identificación</label>
                <input type="number" placeholder="Ingrese la identificacion" name="identification" id="identification" class="w-full p-3 border rounded-lg">
                @error('identification')
                    <p class="text-center text-white bg-red-600 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5 text-left">
                <label for="address" class="block mb-2 font-bold text-slate-200">Direccion</label>
                <input type="text" placeholder="Ingrese su direccion" name="address" id="address" class="w-full p-3 border rounded-lg">
                @error('address')
                    <p class="text-center text-white bg-red-600 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5 text-left">
                <label for="phone" class="block mb-2 font-bold text-slate-200">Teléfono</label>
                <input type="number" placeholder="Ingrese su Telefono" name="phone" id="phone" class="w-full p-3 border rounded-lg">
                @error('phone')
                    <p class="text-center text-white bg-red-600 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" value="Guardar" class="p-2 font-bold text-black uppercase rounded-lg">
        </form>
    </div>
</div>


@endsection
