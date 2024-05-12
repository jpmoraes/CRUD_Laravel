<x-layout title="Adicionar Serie">

    <h1>Adicionar Série</h1>
    <form action="/serie/salvar" method="post">
        @csrf <!-- Adicionado token CSRF -->
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nome da Série</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="nome" placeholder="Nome da Série"> <!-- Adicionado o atributo name para o campo de entrada -->
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button> <!-- Adicionado o tipo submit ao botão -->
    </form>

</x-layout>
