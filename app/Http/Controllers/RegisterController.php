<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

 public function index(){
    return view('auth.register');
 }

 public function store(Request $request) {
    //dd($request['name']);
    //dd($request->get('email'));
    //dd($request->email);
    $this->validate($request, [
        'name'=>'required | max:30',
        'identification'=>'required | min:10|int',
        'address' =>'required | min:9',
        'phone' =>'required| max:13'
    ]);

    User::create([

        'name' => $request->name,
        'identification' => $request->identification,
        'address' => $request->address,
        'phone' => $request->phone
    ]);
    


    return redirect()->route('register');
}

}
