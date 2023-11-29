@extends('admin.template.layout')
@section('tituloAba', 'Editar Despesa')
@section('titulo', 'Editar Despesa')
@section('conteudo')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Despesa</div>

                    <div class="card-body">
                        <form action="{{ route('despesas.update', $despesa->id) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- Define o método PUT para atualização -->

                            <div class="form-group">
                                <label for="titulo">Título:</label>
                                <input type="text" name="titulo" class="form-control" id="titulo" value="{{ $despesa->titulo }}" required>
                            </div>
                          
                            <div class="form-group">
                                <label for="valor">Valor:</label>
                                <input type="number" name="valor" class="form-control" id="valor" required>
                            </div>

                            <div class="form-group">
                                <label for="categoria">Categoria:</label>
                                <input type="text" name="categoria" class="form-control" id="categoria" value="{{ $despesa->categoria }}" required>
                            </div>

                            <div class="form-group">
                                <label for="data_publicacao">Data de Publicação:</label>
                                <input type="date" name="data_publicacao" class="form-control" id="data_publicacao" value="{{ $despesa->data_publicacao }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection