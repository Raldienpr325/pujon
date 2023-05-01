<?php

namespace App\Http\Controllers;

use App\Models\User;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countPegawai = User::where('jabatan','=','pegawai')->count();
        $countAtasan = User::where('jabatan','=','atasan')->count();

        return view('home', compact([
            'countPegawai',
            'countAtasan',
        ]));
    }

    public function detail($id){
        $data = User::findOrFail($id)->first();
        // dd($data);
        return view('Detail.index',compact('data'));
    }
}
