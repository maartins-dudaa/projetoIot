<div class="container mt-5">
    
    <div class="card">
        <div class="card-body">
            

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="col-8">
            <h2 class="fw-bold text-info mb-1; text-center">Ambientes</h2>
        </div>

        <div class="col-md-6 d-flex" style="width: 200px">

                    <input placeholder="Buscar Ambientes..." wire:model.live="search" class="form-control me-2">

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

        <div class="d-flex flex-column align-items-center mt-3">
                        <div class="mb-2">
                            Mostrando {{ $ambientes->firstItem() }} até {{ $ambientes->lastItem() }} de
                            {{ $ambientes->total() }} resultados
                        </div>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                {{-- Link Anterior --}}
                                <li class="page-item {{ $ambientes->onFirstPage() ? 'disabled' : '' }}">
                                    <a href="#" class="page-link" wire:click.prevent="previousPage"
                                        aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>

                                {{-- Links das páginas --}}
                                @foreach ($ambientes->getUrlRange(1, $ambientes->lastPage()) as $page => $url)
                                    <li class="page-item {{ $ambientes->currentPage() == $page ? 'active' : '' }}">
                                        <a href="#" class="page-link"
                                            wire:click.prevent="gotoPage({{ $page }})">{{ $page }}</a>
                                    </li>
                                @endforeach

                                {{-- Link Próximo --}}
                                <li class="page-item {{ $ambientes->hasMorePages() ? '' : 'disabled' }}">
                                    <a href="#" class="page-link" wire:click.prevent="nextPage" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

    </div>

</div>