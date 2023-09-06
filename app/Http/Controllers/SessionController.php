<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create(){


        return view('auth.login1');
    }

    public function store() {

        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'Tu email o tu password es incorrecto, intente nuevamente',
            ]);
        } else {
                if(auth()->user()->role == 'admin'){
                    return redirect()->route('admin.index');
                }else {
                    return redirect()->route('users.index');
                }

        }
        return redirect()->to('/');
    }
    public function destroy(){
        auth()->logout();

        return redirect()->to('/');
    }

}
