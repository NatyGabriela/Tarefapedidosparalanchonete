<?php

namespace App\Livewire\Create;

use Livewire\Component;

class Create extends Component
{
   
    public $nome;
    public $endereco;  
    public $telefone;
    public $cpf;
    public $email;
    public $senha;
    
    public function render()
    {
        return view('livewire.create.create');
    }
    
       
        public function store()
        {
            Create::create([
                'nome' => $this->nome,
                'endereco' => $this->endereco,
                'telefone' => $this->telefone,
                'email' => $this->email,
                'senha' => $this->senha,
        ]);


        session()->flash('success', 'Cadastro Realizado');
    }


 
}
