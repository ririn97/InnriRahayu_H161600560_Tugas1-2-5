<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;

class prodiController extends Controller
{
    public function tampil (){
     return view('prodi');
 	}
 	public function tampilModel(){
 	 $prodis=Prodi::all();
 	 return view('prodi',compact('prodis'));
 	}
}
