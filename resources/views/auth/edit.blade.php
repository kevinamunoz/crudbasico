@extends('layout.app')

@section('titulo')

@endsection

@section('contenido')
    <div class="flex justify-center my-10">

        <div class="p-6 mt-5 border rounded-lg md:w-3/12 bg-yellow">

        <form action="{{ route('usuarios.actualizar', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <h1 class="text-2xl font-bold text-center text-slate-200">Actualizar Usuario</h1><br>
                <label for="name" class="block mb-2 font-bold uppercase text-slate-200">Nombre</label>
                <input type="text" id="name" name="name" value="{{ old('name', $usuario->name) }}"
                    class="w-full p-3 border rounded-lg">
                @error('name')
                    <p class="text-xs italic text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="identification" class="block mb-2 font-bold uppercase text-slate-200">IDENTIFICACION</label>
                <input type="number" id="identification" name="identification" value="{{ old('identification', $usuario->identification) }}"
                    class="w-full p-3 border rounded-lg">
                @error('cedula')
                    <p class="text-xs italic text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="address" class="block mb-2 font-bold uppercase text-slate-200">DIRECCION</label>
                <input type="text" id="address" name="address" value="{{ old('address', $usuario->address) }}"
                    class="w-full p-3 border rounded-lg">
                @error('address')
                    <p class="text-xs italic text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="phone" class="block mb-2 font-bold uppercase text-slate-200">TELÉFONO</label>
                <input type="text" id="phone" name="phone"
                    value="{{ old('phone', $usuario->phone) }}"
                    class="w-full p-3 border rounded-lg">
                @error('phone')
                    <p class="text-xs italic text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-5 ">
                <div class="flex items-center">
                    <button type="submit" class="p-2 font-bold text-black uppercase rounded-lg">Guardar</button>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('pdf', [$usuario->id]) }}">
                        <button type="button" class="p-2 font-bold text-black uppercase rounded-lg">Cargar PDF</button>
                    </a>
                </div>
            </div>
        </form>
        </div>
    </div>
@endsection
