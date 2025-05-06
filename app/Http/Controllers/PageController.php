<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome (){
        return view('welcome');
    }

    public function login (){
        return view('login');
    }

    public function validationLogin(Request $request){
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $username = $request->username;
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request){
        $mahasiswa = [
            [
                'nim' => '210123456',
                'nama' => 'Ani Setiawan',
                'program_studi' => 'Informatika',
                'status' => 'Aktif'
            ],
            [
                'nim' => '210123457',
                'nama' => 'Budi Hartono',
                'program_studi' => 'Teknik Sipil',
                'status' => 'Cuti'
            ],
            [
                'nim' => '210123458',
                'nama' => 'Citra Dewi',
                'program_studi' => 'Agroteknologi',
                'status' => 'Nonaktif'
            ],
        ];
        $username = $request->query('username');
        return view('dashboard', compact('username','mahasiswa'));
    }

    public function pengelolaan(Request $request){
        $mahasiswa = $request->query('mahasiswa');
        $username = $request->query('username');
        return view('pengelolaan', compact('username','mahasiswa'));
    }

    public function profile(Request $request){
        $mahasiswa = $request->query('mahasiswa');
        $username = $request->query('username');
        return view('profile', compact('username','mahasiswa'));
    }
}
