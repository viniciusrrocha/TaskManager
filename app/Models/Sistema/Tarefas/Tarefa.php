<?php

namespace App\Models\Sistema\Tarefas;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $table      = "tarefas";
    public    $timestamps = false;
    
    public function index()
    {
        $tarefas = $this->all();
        return $tarefas; 
    }
}
