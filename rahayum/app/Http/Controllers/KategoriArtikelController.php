<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
    	//Eloquent => ORM (Object Relation Mapping)
    	$ListKategoriArtikel=KategoriArtikel::all(); //select * from kategori_artikel

    	//blade
    	return view('kategori_artikel.index',compact('ListKategoriArtikel'));
    	//return view( view: 'kategori_artikel.index')->with('data',$ListKategoriArtikel);
    }

    public function show($id){
    	//Eloquent
    	//$kategoriArtikel=KategoriArtikel::where('id',$id)->first(); // select * from kategori_artikel where id=$id limit 1
    	$kategoriArtikel=KategoriArtikel::find($id);

    	return view('kategori_artikel.show',compact('kategoriArtikel'));
	}

	public function create(){
		return view('kategori_artikel.create');
	}

	public function store(Request $request){
		$input= $request->all();

		KategoriArtikel::create($input);

		return redirect(route('kategori_artikel.index'));
	}
}