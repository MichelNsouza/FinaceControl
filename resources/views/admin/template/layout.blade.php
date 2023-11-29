<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> @yield('tituloAba')</title>
    @include("admin.template.style")
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
  <footer>
      <p>Michel N Souza &copy; 2023</p>
  </footer>
</body>
</html>