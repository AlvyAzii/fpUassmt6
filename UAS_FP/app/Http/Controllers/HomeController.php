<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    
    public function upload(Request $req) { 
        $path = $req
        ->file('berkas')
        ->storeAs('', $req->file('berkas')->getClientOriginalName(), 'public'); return view('hasil-upload', ['path' => $path]);
     }
        public function unduh($path) { 
        return Storage::download('public/' . $path); 
        }
      
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
