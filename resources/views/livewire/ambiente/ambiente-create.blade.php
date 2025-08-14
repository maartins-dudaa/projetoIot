<div class="mt-5">

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    {{-- Cartão principal --}}
    <div class="card border-0 shadow rounded-3" style="margin-left: 20%; margin-right:20%">
        <h5 class="card-header text-white fw-bold" style="background: linear-gradient(to right, #fff585, #fd85ad);">
            Cadastro de Ambientes
        </h5>

        <div class="card-body" style="background-color: rgb(255, 243, 253)">
            <form wire:submit.prevent="store">
                <div class="text-center">
                    <img src="{{ asset('img/logo-img.png') }}" width="200px" height="200px"
                        style="border-radius: 80%;">
                </div>
                <div class="py-3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4; widht:100%">

                                <div class="bg-white p-4 rounded shadow-sm border border-light-subtle">

                                    {{-- Nome --}}
                                    <div class="mb-3">
                                        <label for="nome" class="form-label fw-semibold">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome"
                                            placeholder="Nome Completo" wire:model.defer="nome">
                                       
                                    </div>


                                    {{-- status --}}
                                    <div class=mb-3>
                                        <label for="status" class="form-label fw-semibold">Status</label>
                                        <select class="form-select" id="status" name="status"
                                            wire:model.defer="status">
                                            <option hidden>Selecione</option>
                                            <option value="1">Ativo</option>
                                            <option value="0">Inativo</option>
                                        </select>
                                        
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label for="descricao" class="form-label fw-semibold">Descrição</label>
                                        <input type="text" class="form-control" id="descricao" name="descricao"
                                           wire:model.defer="descricao">
                                      
                                    </div>



                                


                                    <button type="submit" ><a href="{{ route('ambiente.list') }}"
                                        class="btn btn-success w-100 py-2">Cadastrar
                                      
                                    </a></button>

                                    </html>

                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div> 
        
    </div>
</div>