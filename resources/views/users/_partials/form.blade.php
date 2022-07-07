@csrf
<!--Forms de cadastro de usuario-->
<div class="container-fluid">  
    <div class="form-group mb-3">
        <label for="name" class="form-label">Name:</label>
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
    <div class="form-group mb-3">
        <button type="submit" class="btn btn-secondary"> Enviar</button>
    </div>    
 <!--Forms de cadastro de usuario-->   
</div>