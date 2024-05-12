<x-layout title="Series">
    
        <h1>Série</h1>
        <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
        <ul class="list-group">
            @foreach($series as $serie)
            <li class="list-group-item">
                <h6>{{$serie->nome}}</h6>
                <div class="orgButton">
                    <form id="deleteForm{{$serie->id}}" action="{{ route('series.delete', ['id' => $serie->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-default btn-lg" data-bs-toggle="modal" data-bs-target="#deleteModal{{$serie->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4H1.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-3.5zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </button>
                    </form>
                    <button type="button" class="btn btn-default btn-lg" data-bs-toggle="modal" data-bs-target="#myModal{{$serie->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 1.466a.25,25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"/>
                        </svg>
                    </button>
                </div>
            </li>
            <!-- Modal de Atualização -->
            <div class="modal fade" id="myModal{{$serie->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$serie->id}}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel{{$serie->id}}">Atualizar Nome</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('series.update', ['id' => $serie->id ]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="novo_nome{{$serie->id}}">Novo Nome:</label>
                                    <input type="text" class="form-control" id="novo_nome{{$serie->id}}" name="novo_nome" value="{{$serie->nome}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </ul>
   
</x-layout>
