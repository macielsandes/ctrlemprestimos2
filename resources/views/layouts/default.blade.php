<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <!--inicializacao da pagina-->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                
              <!--Barra de Navegacao-->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">CTRL EMPRÉSTIMOS</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!--inicio das opções de menu-->
                        <div class="col">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                                    <li class="nav-item active">
                                        <a class="nav-link active" aria-current="page" href="/index">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="/user">Usuários</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/material">Materiais</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/register">Registrar</a>
                                    </li>
                                </ul>
                                <!--Fim das opções de menu-->
                                <!--mostra definições do perfil para o usuario-->
                                <div class="col">                                    
                                    <div class="dropdown text-end">
                                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="https://github.com/mdo.png" alt="mdo" width="32"
                                                height="32" class="rounded-circle">
                                        </a>
                                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                            <li><a class="dropdown-item" href="#">Configurações</a></li>
                                            <li><a class="dropdown-item" href="#">Sair</a></li>
                                        </ul>
                                    </div>

                              </div>
                </nav>
            </div>
            <!--Fim da barra de Navegação-->

            <!--Corpo das paginas-->
            <main>
                @yield('content')

            </main>

            <!--Fim do Corpo das paginas-->

            <!--Rodape do HTML-->
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="container-fluid">
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
