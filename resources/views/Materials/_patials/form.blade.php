@csrf
<div class="container-fluid">  
    <div class="form-group mb-3">
      <label for="descricao" class="form-label">Descrição:</label>
      <input type="text" class="form-control form-control-sm" placeholder="Descrição do produto" value="{{ $material->descricao ?? old('descricao') }}">
     </div>
    <div class="form-group mb-3">
        <label for="numserie" class="form-label">Serial:</label>
        <input type="text" class="form-control form-control-sm" placeholder="Serial" value="{{ $material->numserie ?? old ('numserie')}}">  
    </div>
    <div class="form-group mb-3">
      <label for="numpatrimonio" class="form-label">Numero do Patrimonio:</label>
      <input type="text" class="form-control form-control-sm" placeholder="Serial" value="{{ $material->numpatrimonio ?? old ('numpatrimonio')}}">  
  </div>
      <div class="form-group mb-3">
          <label for="qtde" class="form-label">Quantidade:</label>
          <input type="number" class="form-control form-control-sm" placeholder="1" value="{{ $material->qtde ?? old ('qtde')}}">  
      </div>
      <div>
        <button type="submit">Enviar</button>
  </div>  
</div>   