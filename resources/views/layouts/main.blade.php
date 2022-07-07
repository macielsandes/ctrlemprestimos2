<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Tags meta obrigatorias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--fontes do Google-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    
    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Icons do Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	
    <!--Meu CSS do projeto-->
    <link rel="stylesheet" href="css/styles.css">      
        
    <title>@yield('title') - Controle de Empréstimos</title>
</head>
<body>

   
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index">CTRL EMPRÉSTIMOS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/index">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/users">Usuários</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/materials">Materiais</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/registers">Registrar</a>
                  </li>                  
                </ul>                
              </div>
              <!--Div da barra de pesquisa-->
            </div>
                <form class="d-flex action="{{ route('materials.index') }}" method="get">                  
                    <input class="form-control me-2" type="search" name ="pesquisar" placeholder="Pesquisar" aria-label="pesquisar">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </nav>    
        </div>
    </nav>    

<main>
    <!--Corpo das paginas-->  
    <div class="container-fluid">
        @yield('content') 
    </div>      
  <!--Fim do Corpo das paginas-->
</main> 
     <!--Define o Rodape da pagina-->    
    <div class="container-fluid">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">CTRL EMPRÉSTIMOS; 2022</p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          </a>
        </footer>
      </div>
    <!--Fim definição rodapé-->
    
    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Fim do javaScript do Bootstrap -->
</body>
</html>