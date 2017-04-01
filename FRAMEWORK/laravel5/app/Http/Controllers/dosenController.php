<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari Dosencontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama='Moch. Hanafi';
    	$dosen->nip='909090909090';
    	$dosen->alamat='Samarinda';
    	$dosen->pengguna_id=1;
    	$dosen->save();
    	return "data Dosen dengan nama {$dosen->nama} telah disimpan";
    }
}
