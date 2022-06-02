@csrf
<div class="container-fluid">  
    <div class="form-group mb-3">
        <label for="Name" class="form-label">Name:</label>
        <input type="text" name="name" value="{{ $user->name ?? old('name') }}">
    </div>
    <div class="form-group mb-3">
        <label for="Name" class="form-label">Email:</label>
        <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email ?? old ('email')}}">
    </div>
    <div class="form-group mb-3">
        <label for="Name" class="form-label">Senha:</label>
        <input type="password" name="password" placeholder="Senha:">
    </div>
    <div>
        <button type="submit"> Enviar</button>
    </div>    
</div>