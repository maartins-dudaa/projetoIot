<div class="mt-5">
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-light rounded">
                    <div class="card-header text-center fw-bold text-info mb-1">
                        <h4>Cadastro de Sensores</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="store">
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Codigo</label>
                                <input type="text" class="form-control" id="codigp" wire:model.defer="codigo"
                                    placeholder="EX:.X1...">
                                     @error('codigo')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo</label>
                                <input type="text" class="form-control" id="tipo" wire:model.defer="tipo"
                                    placeholder="EX:.infravermelho...">
                                     @error('tipo')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <input type="text" class="form-control" id="descricao" wire:model.defer="descricao"
                                    placeholder="digite aqui...">
                                   
                            </div>

                            <div class=mb-3>
                                <label for="ambiente_id" class="form-label fw-semibold">Ambiente</label>
                                <select class="form-select" id="ambiente_id" name="ambiente_id"
                                    wire:model.defer="ambiente_id">
                                    
                                    @foreach ($ambientes as $ambiente)
                                        <option value="{{$ambiente->id }}" > {{ $ambiente->nome }}</option>
                                    @endforeach
                                    
                                </select>

                            </div>

                            <div class=mb-3>
                                        <label for="status" class="form-label fw-semibold">Status</label>
                                        <select class="form-select" id="status" name="status"
                                            wire:model.defer="status">
                                            <option hidden>Selecione</option>
                                            <option value="0">Inativo</option>
                                            <option value="1">Ativo</option>
                                        </select>
                                          @error('status')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        
                                    </div>


                            <input class="btn btn-info mt-2" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>