@extends('layout.app')

@section('titulo')

@endsection

@section('contenido')

<div class="container p-5 mx-auto mt-5">
        <h1 class="my-10 mb-6 text-3xl font-bold text-center text-slate-200">Usuarios</h1>

        <div class="my-10 overflow-x-auto">
            <table class="w-full border border-collapse border-gray-300 table-auto">
                <thead>
                    <tr class="text-slate-200">
                        <th class="px-4 py-3 text-slate-200 ">Nombre</th>
                        <th class="px-4 py-3 text-slate-200">Identificación</th>
                        <th class="px-4 py-3 text-slate-200">Correo</th>
                        <th class="px-4 py-3 text-slate-200">Telfono</th>
                        <th class="px-4 py-3 text-slate-200">Administrar</th>
                        <th class="px-4 py-3 text-slate-200">Administrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="{{ $loop->even ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="px-4 py-3 text-center border-b border-gray-300">{{ $user->name }}</td>
                            <td class="px-4 py-3 text-center border-b border-gray-300">{{ $user->identification }}</td>
                            <td class="px-4 py-3 text-center border-b border-gray-300">{{ $user->address }}</td>
                            <td class="px-4 py-3 text-center border-b border-gray-300">{{ $user->phone }}</td>
                            <td><div class="text-center"><a href="{{ route('editar', $user->id) }}" class="p-2 font-bold text-black uppercase rounded-lg ">Actualizar</a></div></td>
                            <td></div><form action="{{ route('eliminar', $user->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <div class="text-center" ><button type="submit" class="p-2 font-bold text-black uppercase rounded-lg ">Eliminar</button></div>
                                </form></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection
