@csrf
<div class="container-fluid">  
    <div class="form-group mb-3">
      <label for="Descricao" class="form-label">Descrição</label>
       <input type="text" class="form-control form-control-sm" id="descricao" value="{{ $material->descricao ?? old('descricao') }}">
      </div>
    <div class="form-group mb-3">
      <label for="serie">Serial</label>
      <input type="text" class="form-control form-control-sm" id="serie" value="{{ $material->serie ?? old ('serie')}}">  
    </div>
    <div class="form-group mb-3">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control form-control-sm" id="quantidade" value="{{ $material->quantidade ?? old ('quantidade')}}">  
    </div>
    <div class="form-group mb-3">
        <label for="text">Anotação</label>
        <input type="text" class="form-control form-control-sm" id="nota" value="{{ $material->nota ?? old ('nota')}}">          
    </div>
</div>  
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>