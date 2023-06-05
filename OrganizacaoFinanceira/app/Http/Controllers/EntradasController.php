<?php

namespace App\Http\Controllers;
use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradasController extends Controller
{
    public function index(){
        $entradas = Entrada::all();
        $entradas = $entradas->sortBy('id');
        return view('index', ['entradas'=>$entradas]);
    }
    public function create(){
        return view('entradas');
    }    
    public function store(Request $request){
      
        entrada::create($request->all());
        return redirect()->route('entradas.index');

    }
    public function edit($id){
        $entradas = Entrada::find($id);
        return view('edit',compact('entradas'));
    }
    public function update(Request $request, $id){
        $entradas = Entrada::find($id);
        $entradas->origem = $request->origem;
        $entradas->valor = $request->valor;
        $entradas->datarecebimento = $request->datarecebimento;
        $entradas->update();
        return redirect()->route('entradas.index');
    }
    public function destroy($id){
        $entradas = Entrada::find($id);
        $entradas->delete();
        return redirect()->route('entradas.index');
    }
}
