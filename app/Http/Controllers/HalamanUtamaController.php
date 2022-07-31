<?php

namespace App\Http\Controllers;

use App\Models\Empolyee;
use App\Models\Kurir;
use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function index()
    {
        return view('utama.index');
    }
    public function about()
    {
        return view('utama.about');
    }
    public function team()
    {
        return view('utama.team');
    }
    public function contact()
    {
        return view('utama.contact');
    }
    public function kurir()
    {
        $kurir = Kurir::all();
        return view('utama.kurir', [
            "kurir" => $kurir
        ]);
    }
    public function pegawai()
    {
        $pegawai = Empolyee::all();
        return view('utama.pegawai', [
            "pegawai" => $pegawai
        ]);
    }
}
