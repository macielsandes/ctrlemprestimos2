<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Tags meta obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--fontes do Google-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    
    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          	
    <!--Meu CSS do projeto-->
    <link rel="stylesheet" href="/css/styles.css">        
    
    <title>@yield('title') - Controle de Empréstimos</title>
</head>
<body>

<!--Cabeçalho da pagina-->   
  <header class="container-fluid">        
      <div class="row">
        <div class="col">                    
            <h3>CTRL EMPRÉSTIMOS</h3>      
        </div>         
         
        <!--Define um tipo de perfil para o usuario-->     
        <div class="col">                      
           <div class="dropdown text-end">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">Configurações</a></li>
                <li><a class="dropdown-item" href="#">Sair</a></li>
             </ul>     
            </div> 
        </div>      
      </div>
    </header>
    
    <div class="container">
    <!--Barra de Navegacao-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">       
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>>         
            
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
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
            </div>
        </div>
    </nav>
  </div>  
    <!--Fim da barro de Navegação-->
            
          </div>
      </div>      
    </nav>    
 <!--Corpo das paginas-->   
<main>  
        @yield('content')    

</main> 
<!--Fim do Corpo das paginas-->  
<!--Define a Footer da pagina-->
    
     
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="container-fluid">
          <p class="col-md-4 mb-0 text-muted">CTRL Empréstimos; 2022</p>      
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use></svg>
            </a>
          </div>
        </footer>
      
    <!--Fim definição rodapé-->    
    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
</body>
</html>