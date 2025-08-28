<div class="container mt-5">
    
    <div class="card">
        <div class="card-body">
            
            <div class="col-md-6 d-flex">
                <select wire:model="perPage" class="form-select me-2" style="width: 150px">
                  
                    <option value="25">15 por página</option>
                    
                  
                </select>

              
        
            </div>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="col-8">
            <h2 class="fw-bold text-info mb-1; text-center">Ambientes</h2>
        </div>
        
        <a class="btn btn-info btn-sm" href="{{ route('ambiente.create') }}">
            Cadastrar Novo Ambiente
        </a>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ambientes as $a)
                    <tr>
                        <td>{{ $a->nome }}</td>
                        <td>{{ $a->descricao }}</td>
                        <td>{{ $a->status == 1 ? "Ativo" : "Inativo" }}</td>
                        <td>
                        
                           <a class="btn btn-info btn-sm" href="{{ route('ambiente.edit', $a->id) }}">
          Editar
        </a>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>