<div class="container mt-5">
    <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <form class="d-flex">
                <input class="form-control me-4" type="search" name="search" placeholder="Buscar por registro"
                aria-label="search" wire:model.live="search">
                <button class="btn btn-info" type="submit">Buscar</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            
            <div class="col-md-6 d-flex">
                <select wire:model="perPage" class="form-select me-2" style="width: 150px">
                  
                    <option value="10">10 por página</option>
                    
                  
                </select>

              
        
            </div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="col-8">
            <h2 class="fw-bold text-info mb-1; text-center">Registros</h2>
        </div>
        
    </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                 
                    <th>Sensor ID</th>
                    <th>Valor</th>
                    <th>Unidade</th>
                       <th>Data e Hora</th>
                   
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $r)
                    <tr>
                        <td>{{$r-> sensor->id}}</td>
                        <td>{{ $r->valor }}</td>
                         <td>{{ $r->unidade }}</td>
                              <td>{{ $r->data_hora }}</td>
                          
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>