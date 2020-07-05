<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = ArtikelModel::getAll();
        return view('/artikelview', compact('artikel'));
    }

    public function create(){
        return view('/artikelform');
    }

    public function store(Request $request) {
        $data_request = $request->all();
        unset($data_request["_token"]);


        $artikel = ArtikelModel::save($data_request);

        if($artikel){
        return redirect()->route('artikel.index');  
        }
    }

    public function show($id_artikel) {
        $artikel= ArtikelModel::find($id_artikel);
        return view('/detail_artikel',compact('artikel'));
    }

    public function edit($id_artikel){
        $artikel= ArtikelModel::find($id_artikel);

        return view ('/edit_artikel',compact('artikel','id_artikel'));
    }

    public function update(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);

        $artikel= ArtikelModel::update($data);
        return redirect('/artikel');
    }

    public function delete($id_artikel) {
        ArtikelModel::delete($id_artikel);
        return redirect('/artikel');
    }
}
