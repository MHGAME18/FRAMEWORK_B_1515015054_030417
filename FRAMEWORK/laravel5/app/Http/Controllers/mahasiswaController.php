<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function mahasiswa(){
        $mahasiswa=mahasiswa::find(1);
        //dd($mahasiswa);
        echo "Nama : ".$mahasiswa->nama;
        echo "<br>";
        echo "Username : ".$mahasiswa->pengguna->username;
        echo "<br>";
         $mahasiswa=mahasiswa::find(2);
        echo "Nama : ".$mahasiswa->nama;
        echo "<br>";
        echo "Username : ".$mahasiswa->pengguna->username;
        echo "<br>";
        $mahasiswa=mahasiswa::find(3);
        echo "Nama : ".$mahasiswa->nama;
        echo "<br>";
        echo "Username : ".$mahasiswa->pengguna->username;
        echo "<br>";

    }
    
}
