<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class ListarController extends Controller
{
    //

    public function listarUser()
    {
        $users = User::all();

        return view('auth.listar', ['users' => $users]);
    }
    public function showusers($id)
    {
        $usuario = User::find($id);

        return view('auth.edit', ['usuario' => $usuario]);
    }

    public function updateusers(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'identification' => 'required|numeric',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $usuario = User::find($id);

        $usuario->update([
            'name' => $request->input('name'),
            'identification' => $request->input('identification'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
        ]);
        

        return redirect()->route('listar')->with('success', 'Usuario actualizado correctamente');
    }
    public function eliminar($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('listar');
    }

    // Generar PDF
    public function pdf($id)
    {
        $userFind = User::find($id);
        // die($userFind);
        $pdf = PDF::LoadView('auth.pdf', compact("userFind"));

        return $pdf->stream();
    }
   

    
}
