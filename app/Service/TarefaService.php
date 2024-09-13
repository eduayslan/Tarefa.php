<?php

namespace App\Service;

use App\Models\Tarefa;

class TarefaService{
public function create(array $tarefa){
    $dados = Tarefa::create([
        'titulo' => $tarefa['titulo'],
        'descricao' => $tarefa['descricao'],
        'status' => 'Esta em aberto'
        

]);
    return $dados;

}

public function findById($id)
{
    $tarefa = Tarefa::find($id);

    if($tarefa == null){
        return[
            'status'=> false,
            'massage'=> 'Tarefa não encontrada'
        ];
    }

    return[
        'status'=> 'true',
        'massage'=> 'Pesquisa realizada com sucesso',
        'data'=> $tarefa
    ];
}

public function getAll()
{
    $tarefa = Tarefa::all();

    return[
        'status'=> true,
        'message'=> 'Pesquisa efetuada com sucesso',
        'data'=> $tarefa
    ];
}
};

