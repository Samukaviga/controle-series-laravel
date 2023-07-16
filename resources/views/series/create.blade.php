<x-layout title="Adicionando Series">

    <form action="/series/salvar" method="post">
        @csrf <!-- Para que o form seja enviado em segurança -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</x-layout>