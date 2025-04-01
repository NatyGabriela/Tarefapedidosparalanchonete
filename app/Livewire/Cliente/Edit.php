<?php

namespace App\Livewire\Cliente;

use Livewire\Component;

class Edit extends Component
{
    
   
    public $nome;
    public $endereco;
    public $cpf;
    public $telefone;
    public $email;
    public $senha;
    
    protected $listeners =
    [
        'editarCliente',
        'closeEditModal'=> 'fecharModal'
    ];

    public function fecharModal(){
        $this->dispatch('hideModal');
    }

    public function render()
    {
        return view('livewire.cliente.edit');
    }

    public function EditarCliente($cliente)
    {
        $cliente = Create::find($cliente);

        if ($cliente) {
            $this->nome = $cliente->nome;
            $this->endereco=$cliente->endereco;
            $this->telefone=$cliente->telefone;
            $this->email = $cliente->email;
            $this->cpf = $cliente->cpf;
            $this->senha = $cliente->senha;

            $this->dispatch('openEditModal');
        }
    }

    public function salvar()
    {
        $cliente = Create::find($this->cliente);

        if ($cliente) {
            $cliente->update([
                'nome' => $this->nome,
                'telefone'=>$this->telefone,
                'endereco'=>$this->endereco,
                'email' => $this->email,
                'cpf' => $this->cpf,
                'senha' => $this->senha,
                
            ]);

            $this->dispatch('CadastroAtualizado');
            $this->dispatch('fecharModalEdicao');
            session()->flash('message', 'Cadastro Atualizado');
        }
    }
}
