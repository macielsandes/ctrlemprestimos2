@csrf
<h4>Novo Material</h4>
<div class="form-group">
  <div class="container-fluid">  
      <div class="form-group mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <input type="text" class="form-control form-control-sm" placeholder="Descrição do produto" id="descricao" value="{{ $material->descricao ?? old('descricao') }}">
      </div>
      <div class="form-group mb-3">
        <label for="serie" class="form-label">Serial:</label>
        <input type="text" class="form-control form-control-sm" placeholder="Numero de Serie" id="numserie" value="{{ $material->serie ?? old ('serie')}}">  
      </div>
      <div class="form-group mb-3">
          <label for="quantidade" class="form-label">Quantidade:</label>
          <input type="number" class="form-control form-control-sm" placeholder="1" id="Quantidade" value="{{ $material->quantidade ?? old ('quantidade')}}">  
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</div>  