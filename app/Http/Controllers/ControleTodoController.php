<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ControleTodo;
class ControleTodoController extends Controller
{
    public function
     inicio()
    {   
        $atividades = ControleTodo::all();
        return view('inicio')->with(['atividades' => $atividades]);
    }
    public function 
    criando()
    {
        return view('criando');
    }
    public function carregando
    (Request $request)
    {
        $request->validate([
            'titulo' => 'required'
        ]);
        $atividade = $request->titulo;
        ControleTodo::create([
            'titulo' => $atividade
        ]);
        return
         redirect()->back()->with('aviso', 'Tarefa Criada');
    }
    public function 
    editando($id)
    {
        $atividade = ControleTodo::find($id);
        return view('editando')->with(['id' => $id, 'atividade' => $atividade]);
    
    }
    public function 
    atualizando(Request $request)
    {
        $request->validate([
            'titulo' => 'required'
        ]);
        $attatividade = ControleTodo::find($request->id);
        $attatividade->update(['titulo' => $request->titulo]);
        return redirect('/inicio')->with('aviso', "A lista foi editada");}
    public function
     concluindo($id)
    {
        $atividade = ControleTodo::find($id);
        if ($atividade->feito){
            $atividade->update(['feito' => false]);
            return redirect()->back()->with('aviso', "Tarefa Pendente");
        }else {
            $atividade->update(['feito' => true]);
            return redirect()->back()->with('aviso', "Tarefa Concluída");
        }
        
    }
    public function 
    apagando($id)
    {
        $atividade = ControleTodo::find($id);
        $atividade->delete();
        return redirect()->back()->with('aviso', "Tarefa Deleteda");
        
    }

}
