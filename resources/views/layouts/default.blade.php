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
    <!-- Solicitando exigição da barra de menu -->
  @section('sidebar')
    @parent
  @endsection
    <!-- Conteúdo principal da página -->
    <div class="container">            
        @yield('content')    
    </div>
    <!--Fim do Corpo das paginas-->
  
    <!-- JavaScript do Bootstrap -->
   <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>
