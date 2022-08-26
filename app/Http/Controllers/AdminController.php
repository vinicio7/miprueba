<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cinema;
use App\Models\CinemaRoom;
use App\Models\Invoice;
use App\Models\Movie;
use App\Models\SeatInvoice;
use App\Models\Bilboard;
use App\Models\DetailInvoice;
use Exception;
use Validator;

class AdminController extends Controller
{
    public function login(){
        if(session()->get('user')){
            return redirect('/home');
        }else{
            return view('login');
        }
    }

    public function index(){
            session()->flush();
            return redirect('/');
    }


    public function logout(){
            session()->flush();
            return redirect('login');
    }

    public function autenticar(Request $request){
        session()->flush();
        $usuario = User::where('user',$request->input('user'))->first();
        if($usuario){
            if(\Hash::check($request->input('password'), $usuario->password)){
                session(['success' => 'Sesion iniciada correctamente']);
                session(['user' => $usuario]);
                return redirect('/home');
            }else{
                session(['error' => 'Contraseña incorrecta']);
                return \Redirect::back();
            }
        }else{
            session(['error' => 'El usuario no existe']);
            return \Redirect::back();
        }
    }

    public function cinemas(Request $request){
        if(session()->get('user')){
            return view('cinemas');
        }else{
            return view('login');
        }
    }

    public function cinemas_room(Request $request){
        if(session()->get('user')){
            return view('cinemas_room');
        }else{
            return view('login');
        }
    }

    public function seats(Request $request){
        if(session()->get('user')){
            return view('seats');
        }else{
            return view('login');
        }
    }

    public function users(Request $request){
        if(session()->get('user')){
            return view('users');
        }else{
            return view('login');
        }
    }

    public function home(Request $request){
    	return view('home');
    }

}
