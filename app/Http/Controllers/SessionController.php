<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if (Auth::attempt($infologin)){
            return redirect('/admin');
        } else {
            return redirect('sesi');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }

    function register()
    {
        return view('sesi/register');
    }

    function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'name'=> 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'name.required' => 'Username wajib diisi',
            'email.email'=>'Silahkan masukkan email yang valid',
            'email.unique'=>'Email sudah terpakai',
            'password.required' => 'Password wajib diisi'
        ]);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ];

        User::create($data);
        
        return redirect('sesi');
    }
}
