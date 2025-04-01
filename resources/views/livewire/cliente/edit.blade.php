<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true"
    wire:listener="hideModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Cadastro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label fw-bold">Endereço</label>
                    <input type="endereco" class="form-control" id="endereco" name="endereco" placeholder="ex:Rua"
                        wire:model.defer="endereco">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label fw-bold">Telefone</label>
                    <input type="telefone" class="form-control" id="telefone" name="telefone" placeholder="ex:(18)99999-9999"
                        wire:model.defer="telefone">
                </div>
                <div class="mb-3 fw-bold ">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="ex:xxx@xxx.com" wire:model.defer="email">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label fw-bold">CPF</label>
                    <input type="cpf" class="form-control" id="cpf" name="cpf" placeholder="ex:****"
                        wire:model.defer="cpf">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="ex:******"
                        wire:model.defer="senha">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" wire:click="salvar">Salvar</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('fecharModalEdicao', function() {
                var modal = document.getElementById('editModal');
                var modalInstance = bootstrap.Modal.getInstance(modal);

                if(modalInstance){
                    modalInstance.hide();
                }  else { 
                    var newModal = new bootstrap.modal(modal); 
                    newModal.hide(); 
                }

                document.querySelectorAll('.modal-backdrop')
                .forEach(el => el.remove()); 
                document.body.classList.remove('modal-open');
            });
        });
    </script>

</div>
