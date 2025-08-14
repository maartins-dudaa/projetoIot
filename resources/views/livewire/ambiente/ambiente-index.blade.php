<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2 class="card-header text-white fw-bold">Ambientes</h2>
        </div>

    </div>

    <div class="card">
        <div class="card-body">




            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($ambientes as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->nome }}</td>
                                <td>{{ $a->descricao }}</td>
                                <td>{{ $a->status }}</td>
                            </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>


</div>
</div>
