@csrf
<!--Forms de cadastro de usuario-->
<div class="container border">  
    <div class="form-group mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digite seu nome completo..."value="{{ $user->name ?? old('name') }}">
    </div>
    <div class="form-group mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu e-mail:" value="{{ $user->email ?? old ('email')}}">
    </div>
    <div class="form-group mb-3">
        <label for="Name" class="form-label">Senha:</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Digite uma senha:">
    </div>
    <div class="form-group mb-3">
        <label for="Name" class="form-label">Repete senha:</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Repetir sua senha">
    </div>
    
    <!--Tipo de usuario que será criado-->
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-12 pt-0">Tipo de usuário</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">Padrão      
                </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">Administrador
            </label>
          </div>          
        </div>
      </fieldset> 

    <div class="form-group mb-3">
        <button type="submit" class="btn btn-secondary">Enviar</button>
    </div>    
 <!--Forms de cadastro de usuario-->   
</div>