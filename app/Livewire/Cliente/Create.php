<?php

namespace App\Livewire\Cliente;

use Livewire\Component;

class Create extends Component
{
   
    public $nome;
    public $endereco;  
    public $telefone;
    public $cpf;
    public $email;
    public $senha;
     

    protected $rules=[
        'nome'=> 'required|nome|max:60',
        'endereco'=>'required|endereco|min:10',
        'telefone'=>'required|telefone|min:11',
        'cpf'=>'required|cpf|min:11',
        'email'=>'required|email|min:25',
        'password' => 'required|min:6'
    ];

    protected $message=[
        'nome.required'=>'nome obrigatório',
        'nome.min'=>'nome deve conter no minimo 60 caracteres',
        'endereco.required'=>'endereco obrigatório',
        'endereco.min'=>'endereco deve conter no minimo 10 caracteres',
        'telefone.required'=>'telefone obrigatório',
        'telefone.min'=>'telefone deve conter no minimo 11 caracteres',
        'cpf.required'=>'cpf obrigatório',
        'cpf.min'=>'cpf deve conter no minimo 11 caracteres',
        'email.required'=> 'email obrigatório',
        'email.email'=> 'formato email inválido',
        'password.required'=>'senha obrigatória',
        'password.min'=> 'senha deve conter no minimo 6 caracteres'
    ];

    public function render()
    {
        return view('livewire.cliente.create');
    }
    
       
        public function store()
        {
            Create::create([
                'nome' => $this->nome,
                'endereco' => $this->endereco,
                'telefone' => $this->telefone,
                'cpf'=>$this->cpf,
                'email' => $this->email,
                'senha' => $this->senha,
        ]);


        session()->flash('success', 'Cadastro Realizado');
    }


 
}
