<?php

namespace App\Http\Controllers;
use App\Models\Lista;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ListasController extends Controller
{
    public function index(){
        date_default_timezone_set('America/Sao_Paulo');
        $hoje = date('Y-m-d');
        $lista1 = Lista::all()->where('status',false);
        $lista2 = Lista::all()->where('dia', $hoje)->where('status', true);
        
        // $listas = $listas->sortBy('id');
        
        
        return view('Listas.index', compact('lista1' ,'lista2'));
    }
    public function create(){
        return view('Listas.create');

    }
    public function store(Request $request){
     
        lista::create($request->all());
        
        return redirect()->route('listas.index');
        
    }
    public function edit($id){
        $listas = Lista::find($id);
        return view('Listas.edit',compact('listas'));
    }
    public function update(Request $request, $id){
        $listas = Lista::find($id);
        $listas->tarefa = $request->tarefa;
        $listas->status = $request->status;
        $listas->dia = date('Y-m-d');
        $listas->update();
        return redirect()->route('listas.index');
    }

    public function destroy($id){
        $tarefa = Lista::findOrFail($id);
        $tarefa->delete();
        return redirect(route('listas.index'));
    }
    
    public function gerar(){
        $hoje = date('Y-m-d');
        $lista1 = Lista::all()->where('status',false);
        $lista2 = Lista::all()->where('dia', $hoje)->where('status', true);
        $pdf = Pdf::loadView('Listas.teste', compact('lista1', 'lista2'));
        $nomepdf = 'teste.pdf';
        return $pdf->setPaper('a4')->stream($nomepdf);
    }
}
