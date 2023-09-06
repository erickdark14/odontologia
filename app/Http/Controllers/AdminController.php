<?php

namespace App\Http\Controllers;
use App\Models\usersModel;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function doctores(){
        return view('admin.doctores.doctors');
    }
    public function add_doctores(){
        return view('admin.doctores.add-doctor');
    }public function edit_doctor(){
        return view('admin.doctores.edit-doctor');
    }


    public function paciente(){
        $users = UsersModel::whereNull('role')->get();
        return view('admin.pacientes.paciente',['users'=>$users]);
    }
    public function add_paciente(){

        return view('admin.pacientes.add-paciente');
    }
    public function edit_paciente(){
        return view('admin.pacientes.edit-paciente');
    }


    public function servicio(){
        return view('admin.servicios.servicio');
    }
    public function add_servicio(){
        return view('admin.servicios.add-servicio');
    }
    public function edit_servicio(){
        return view('admin.servicios.edit-servicio');
    }


    public function cita(){
        return view('admin.citas.cita');
    }
    public function add_cita(){
        return view('admin.citas.add-cita');
    }
    public function edit_cita(){
        return view('admin.citas.edit-cita');
    }
}
