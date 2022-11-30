<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Lista;

class ListaController extends Controller
{
    

    public function home(){
        $tarefas = Lista::all();
        return view('lista.home')->with(['tarefas' => $tarefas]);
    }public function criar(){
        return view('lista.criar');
    }public function carregar(Request $request){
        $request->validate([
            'nome' => 'required'
        ]);
        $tarefa = $request->nome;
        Lista::create([
            'nome' => $tarefa
        ]);
        return redirect()->back()->with('mensagem', 'A tarefa foi criada com êxito!');
    }public function editar($id){
        $tarefa = Lista::find($id);
        return view('lista.editar')->with(['id' => $id, 'tarefa' => $tarefa]);
    }public function atualizar(Request $request){
        $request->validate([
            'nome' => 'required'
        ]);
        $atualizarTarefa = Lista::find($request->id);
        $atualizarTarefa->update(['nome' => $request->nome]);
        return redirect('/home')->with('mensagem', "Lista Editada");
    }public function completa($id){
        $tarefa = Lista::find($id);
        if ($tarefa->status){
            $tarefa->update(['status' => false]);
            return redirect()->back()->with('mensagem', "Tarefa à ser Feita");
        }else {
            $tarefa->update(['status' => true]);
            return redirect()->back()->with('mensagem', "Tarefa Feita");
        }
    }public function deletar($id){
        $tarefa = Lista::find($id);
        $tarefa->delete();
        return redirect()->back()->with('mensagem', "Tarefa Apagada...");
    }
}
