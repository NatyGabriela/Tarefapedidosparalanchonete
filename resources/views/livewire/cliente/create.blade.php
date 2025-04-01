<div class="mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
</button>
</div>
    @endif
    <div class="card">

        <h5 class="card-header">Cadastro de Usuário</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">

         <div class="mb-3">
<label for="nome" class="form-label">Nome</label>
<input type="text" class="form-control" id="nome" name="nome" placeholder="Ex:Nome"
wire:model.defer="nome">
       <div>

     <div class="mb-3">
<label for="telefone">Telefone</label>
<input type="text" class="form-control" id="telefone" name="telefone"  placeholder="Ex:()*********"
    wire:model.defer="telefone">
            </div>

            <div class="mb-3">
                <label for="endereco">Telefone</label>
                <input type="text" class="form-control" id="endereco" name="endereco"  placeholder="Ex:*****"
                    wire:model.defer="endereco">
                            </div>

          <div class="mb-3 fw-bold ">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                placeholder="ex:xxx@xxx.com" wire:model.defer="email">
        </div>

        <div class="mb-3 fw-bold ">
            <label for="cpf">CPF</label>
            <input type="cpf" class="form-control" id="cpf" name="cpf"
                placeholder="ex:xxxxxx" wire:model.defer="cpf">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label fw-bold">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="ex:******"
                wire:model.defer="senha">
        </div>

         <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
         </div>
        </div>
       </form>
        </div>
    </div>
</div>
