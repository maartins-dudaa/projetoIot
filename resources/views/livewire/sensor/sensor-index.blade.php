<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="col-8">
            <h2 class="fw-bold text-info mb-1; text-center">Sensores</h2>
        </div>
        <a class="btn btn-info btn-sm" href="{{ route('sensor.create') }}">
            Cadastrar Novo Sensor
        </a>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                 
                    <th>Código</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                       <th>Status</th>
                        <th>Ambiente</th>
                          <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sensors as $sensor)
                    <tr>
                    
                        <td>{{ $sensor->codigo }}</td>
                        <td>{{ $sensor->tipo }}</td>
                         <td>{{ $sensor->descricao }}</td>
                          <td>{{ $sensor->status == 1 ? "Ativo" : "Inativo" }}</td>
                          <td>{{$sensor->ambiente->nome}}</td>
                        <td>
                        
                           <a class="btn btn-info btn-sm" href="{{ route('sensor.edit', $sensor->id) }}">
          Editar
        </a>
        
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>