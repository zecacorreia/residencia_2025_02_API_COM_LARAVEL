<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;

use App\Http\Requests\AgendaRequest;

class AgendaController extends Controller
{

    public function index(){
        $agenda = Agenda::all();   //select * from agendas
        return response()->json($agenda, 200);
    }

    public function criar(Request $request){
        $nome_recebido = $request->input('nome');
        $telefone_recebido = $request->input('telefone');

        $agenda = new Agenda();
        $agenda->nome = $nome_recebido;
        $agenda->telefone = $telefone_recebido;
        $agenda->save();

        return response()->json($agenda, 201);

    }

    //visualizar
    public function visualizar($id){
        $registro = Agenda::find($id);

        if($registro){
            return response()->json($registro, 200);
        }

        return response()->json(['erro' => 'Registro nao encontrado'], 404);

    }



    //atualizar
    public function atualizar(Request $request, $id){
        $nome_recebido = $request->input('nome');
        $telefone_recebido = $request->input('telefone');

        $agenda = Agenda::find($id);

        if(!$agenda){
            return response()->json(['erro' => 'Registro nao encontrado'], 404);
        }

        $agenda->nome = $nome_recebido;
        $agenda->telefone = $telefone_recebido;
        $agenda->save();

        return response()->json($agenda, 200);

    }

    //deletar
    public function deletar($id){
        $registro = Agenda::find($id);

        if(!$registro){
            return response()->json(['erro' => 'Registro nao encontrado'], 404);
        }

        $registro->delete();

        return response()->json(['msg' => 'Registro deletado com sucesso'], 200);
    }



}
