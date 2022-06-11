<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--fontes do Google-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    
    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <!--icons bootstrap --> 

    	
    <!--Meu CSS do projeto-->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
        
    <title>@yield('title') - Controle de Empréstimos</title>
</head>
    <body>
        <header> 
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="/">CTRL EMPRÉSTIMOS</a>               
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>                           
            </div>             
            </nav>
        </helder>   

        <!-- As a heading -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="navbar-brand" href="/">Home</a>        
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/users">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/materials">Materiais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/emprestimo">Registrar Empréstimo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"href="/devolucao">Registrar Devolução</a>
                </li>
                </ul>        
            </div>
            <form class="d-flex" action="{{ route('users.index') }}" method="get">
                <input class="form-control me-2" type="text" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
            </div>
        </nav>
       
        <div class="app">
           @yield('content')        
        </div>



            <footer>
            <br>
            <!--Define o Rodape da pagina-->    
            <div class="container">
                <div>
                    <p> CTRL EMPRÉSTIMOS - SISTEMA DE CONTROLE EMPRÉSTIMOS;2022</p>
                </div>   
            </footer>
            
            <!-- JavaScript Bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>