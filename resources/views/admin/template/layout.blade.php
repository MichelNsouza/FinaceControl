<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> @yield('tituloAba')</title>
    @include("admin.template.style")
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
  <header>
      <h1>@yield('titulo')</h1>
    <nav>
        <ul>
          <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
          <li><a href="{{ route('despesas.index') }}">Despesas</a></li>
          <li><a href="{ route('investimentos.index') }">Investimentos</a></li>
          <li><a href="{ route('receitas.index') }">Receitas</a></li>
        </ul>
    </nav>
  </header>
    <main>
      @yield('conteudo')
      
    </main>
  <footer class="fixed-footer">
      <p>Michel N Souza &copy; 2023</p>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>