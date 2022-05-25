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
    	
    <!--CSS da aplicação-->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
        
    <title>@yield('title') - Controle de Emprestimos</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">CTRL EMPRÉSTIMOS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/materials">Materiais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/emprestimo">Empréstimos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/devolucao">Devolução</a>
                    </li>                        
                </ul>
            </div> 
            <div>
                <form action="{{ route('materials.index') }}" method="get">
                    <input type="text" name ="search" placeholder="Pesquisar">  
                    <button>Pesquisar</button>
                </form>
            </div>
                <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="submit">Sair</button> 
                </div>                 
            </div>                
            </div>
         </div> 
    </nav>
</helder>   

    <div class="app">
        @yield('content')        
    </div>

<!--Define o Rodape da pagina-->    
<div class="container">
       <footer>
           <div>
               <p> CTRL EMPRÉSTIMOS - SISTEMA DE CONTROLE EMPRÉSTIMOS;2022</p>
           </div>   
       </footer>
    </div>
</body>
</html>