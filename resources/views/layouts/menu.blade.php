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