<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="col-8">
            <h2 class="fw-bold text-info mb-1; text-center">Sensores</h2>
        </div>

        <div class="col-md-6 d-flex" style="width: 200px">

                    <input placeholder="Buscar Sensores..." wire:model.live="search" class="form-control me-2">

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
                @foreach ($sensores as $sensor)
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

        <div class="d-flex flex-column align-items-center mt-3">
                        <div class="mb-2">
                            Mostrando {{ $sensores->firstItem() }} até {{ $sensores->lastItem() }} de
                            {{ $sensores->total() }} resultados
                        </div>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                {{-- Link Anterior --}}
                                <li class="page-item {{ $sensores->onFirstPage() ? 'disabled' : '' }}">
                                    <a href="#" class="page-link" wire:click.prevent="previousPage"
                                        aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>

                                {{-- Links das páginas --}}
                                @foreach ($sensores->getUrlRange(1, $sensores->lastPage()) as $page => $url)
                                    <li class="page-item {{ $sensores->currentPage() == $page ? 'active' : '' }}">
                                        <a href="#" class="page-link"
                                            wire:click.prevent="gotoPage({{ $page }})">{{ $page }}</a>
                                    </li>
                                @endforeach

                                {{-- Link Próximo --}}
                                <li class="page-item {{ $sensores->hasMorePages() ? '' : 'disabled' }}">
                                    <a href="#" class="page-link" wire:click.prevent="nextPage" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

    </div>


</div>