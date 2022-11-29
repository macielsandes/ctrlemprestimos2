<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="IE=edge">

    <!--fontes do Google-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap-->
    <!-- CSS only -->
    <link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css">

    <!--Meu CSS do projeto-->
    <link rel="stylesheet" href="/css/styles.css">

    <title>@yield('title') - Controle de Empréstimos</title>
</head>

<body>

  <!-- cabeçalho  principal que será usado em todas as páginas do nosso website -->
    <header>       
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
        <div class="container-fluid">
          <a class="navbar-brand" href="/index">CTRL EMPRÉSTIMOS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/user">Usuários</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/material">Materiais</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Empréstimo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Devolução</a>
              </li>
          </div>
        </div>
      </nav>      
    </header>    
    <!--Fim da barra de Navegação-->
    
    <!-- Conteúdo principal da página -->
    <div class="container">            
      <main>
            @yield('content')    
      </main>
    </div>
    <!--Fim do Corpo das paginas-->

  <!--Rodape do HTML-->
  <div>
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="container">
            <p class="col-md-4 mb-0 text-muted">CTRL Empréstimos; 2022</p>
              <a href="/"
            class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                </a>
                </div>
            </footer>
      </div>
        <!--Fim definição rodapé-->
        
        <!-- JavaScript do Bootstrap -->
     <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
