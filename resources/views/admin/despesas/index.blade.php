@extends('admin.template.layout')
@section('tituloAba', 'Despesas')
@section('titulo', 'Despesas')
@section('conteudo')

    <h1 class="mb-4">Gerenciamento de Despesas</h1>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Despesas cadastradas</h4>
      
        <a class="btn btn-success" href="{{route('despesas.create')}}">Cadastrar Despesa</a>
      
    </div>
    <div class="card-body">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Valor $</th>
                <th scope="col">Categoria</th>
                <th scope="col">Data de publicação</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>

              @foreach($despesas as $despesa)
                  <tr>
                      <td>{{ $despesa->id }}</td>
                      <td>{{ $despesa->titulo }}</td>
                      <td>{{ $despesa->valor }}</td>
                      <td>{{ $despesa->categoria }}</td>
                      <td>{{ $despesa->data_publicacao }}</td>
                      <td>
                          <a href="{{ route('despesas.edit', $despesa->id) }}" class="btn btn-success btn-sm">Editar</a>
                          <form action="{{ route('despesas.destroy', $despesa->id) }}" method="POST" style="display: inline-block;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                          </form>
                      </td>
                  </tr>
              @endforeach

            </tbody>
        </table>

        <hr>
      <!--
        <div class="d-flex justify-content-center">

            {$despesas->links()}

{{--            <nav>--}}
{{--                <ul class="pagination mb-0">--}}
{{--                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                    <li class="page-item active" aria-current="page">--}}
{{--                        <a class="page-link" href="#">2</a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
          -->
        </div>
    </div>
</div>
@endsection