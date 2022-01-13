<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="/css/estilos.css">

    </head>
    <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-light">

        <div class="collapse navbar-collapse" id="navbar">
          <a href="/" class="navbar-brand">
              <img src="/imagens/logotipo.png" alt="Hospital Meta">
          </a>
          <h5 id="sistema-descricao">Sistema Interno de Gerenciamento </h5>
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a href="/" class="nav-link">Consultas</a>
              </li>
              <li class="nav-item">
                  <a href="/consultas/criar" class="nav-link">Criar Consultas</a>
              </li>

          </ul>
          </div>


      </nav>
    </header>


<main>
<div class="container-fluid">
        <div class="row">
            @if(session('msg'))
            <div class="alert alert-success" role="alert">
                <p class="msg">{{session('msg')}}</p>
            </div>
            @endif
            @yield('content')
        </div>

    </div>
</main>
        <footer>
            <p>Copyright &copy; 2022 Hospital Meta. Todos os direitos reservados.</p>
            <p>Autor: Natanael Vilaça</p>
            <!--fontes do google-->
            <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
            <!--bootstrap-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="/js/scripts.js"></script>
        </footer>
    </body>
</html>
