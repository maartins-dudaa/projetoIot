<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-light rounded">
                <div class="card-header text-center fw-bold text-info mb-1">
                    <h4>Edição de Registros</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="salvar">
                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor</label>
                            <input type="text" class="form-control" id="valor" wire:model.defer="valor"
                                placeholder="0,00...">
                        </div>

                         <div class="mb-3">
                            <label for="unidade" class="form-label">Unidade</label>
                            <input type="text" class="form-control" id="unidade" wire:model.defer="unidade"
                                placeholder="°C...">
                        </div>

                        <div class="mb-3">
                            <label for="data_hora" class="form-label">Data e hora</label>
                            <input type="text" class="form-control" id="data_hora" wire:model.defer="data_hora"
                                placeholder="digite aqui...">
                        </div>
                        

                                    
                           
                        <input class="btn btn-info mt-2" type="submit" value="Salvar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>