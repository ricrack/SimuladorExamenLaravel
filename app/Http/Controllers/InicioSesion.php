<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class InicioSesion extends Controller
{

    public function home()
    {
        return view('inicioSesion');
    }

    public function registro()
    {
        return view('registro');
    }


    public function entrar()
    {
        if (auth()->attempt(request(['user', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El email o la contraseña son incorrectos. Intenta de nuevo'
            ]);
        } else {
            if (auth()->user()->typeUser == 'Docente' || auth()->user()->typeUser == 'docente') {
                return redirect()->to('/docente');
            } else {
                return redirect()->to('/alumno');
            }
        }
    }

    public function registrar()
    {

        $this->validate(request(), [
            'name' => 'required',
            'user' => 'required',
            'typeUser' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::create(request(['name', 'user', 'typeUser', 'password']));

        auth()->login($user);
        return redirect()->to('/');
    }

    public function salir()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}
