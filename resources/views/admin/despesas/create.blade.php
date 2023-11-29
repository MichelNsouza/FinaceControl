@extends('admin.template.layout')
@section('tituloAba', 'Criar Despesa')
@section('titulo', 'Criar Despesas')
@section('conteudo')
<div class="card-body">
    <form action="{{ route('despesas.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" id="titulo" required>
        </div>

      <div class="form-group">
          <label for="valor">Valor:</label>
          <input type="number" name="valor" class="form-control" id="valor" required>
      </div>

        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" class="form-control" id="categoria" required>
        </div>

        <div class="form-group">
            <label for="data_publicacao">Data de Publicação:</label>
            <input type="date" name="data_publicacao" class="form-control" id="data_publicacao" required>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar Despesa</button>
    </form>
</div>

@endsection