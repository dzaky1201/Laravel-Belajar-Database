<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{

    public function index()
    {
        $result = DB::table('mahasiswas')->select('nim', 'nama')->get();
        return view('index-mahasiswa', ['mahasiswas' => $result]);
    }

    public function mahasiswa($nim)
    {
        $result = DB::table('mahasiswas')->where('nim', $nim)->get();
        return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    }
}
