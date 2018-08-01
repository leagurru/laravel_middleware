<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->session()->put(['leandro'=>'alumno']); //crea la sesión

        //$request->session()->get('leandro');

        //session(['leandro2'=>'alumno2']);
        //return session('leandro2');

        //$request->session()->forget('leandro2'); // borra sesión
        //$request->session()->flush();                 // borra toda sesión
        //return $request->session()->all();


        //$request->session()->reflash() // lo mantiene un poco más
        // $request->session()->keep('message') // lo mantiene
        $request->session()->flash('message', 'post creado');
        return $request->session()->get('message');


//        return view('home');
    }
}
