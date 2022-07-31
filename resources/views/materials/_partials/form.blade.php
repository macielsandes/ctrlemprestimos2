@csrf   
    <div class="form-select form-select-lg mb-3">
      <label for="description" class="form-label">Descrição:</label>
      <input class="form-control" type="text" name="description" id="description" placeholder= "Digite o nome de identificação do material" 
        value="{{ $material->description ?? old('description') }}">
     </div>
    <div class="form-select form-select-lg mb-3">
      <label for="numberassets" class="form-label">Numero de Patrimônio:</label>
      <input class="form-control" type="text" name="numberassets" id="numberassets" placeholder="0001" value="{{ $material->numberassets ?? old ('numberassets') }}" >  
    </div>
    <div class="form-select form-select-lg mb-3">
      <label for="qty" class="form-label">Quantidade:</label>
      <input class="form-control" type="number" name="qty" placeholder="1" value="{{ $material->qty ?? old ('qty')}}">  
    </div>   

    <div class="form-select form-select-lg mb-3">    
        <button type="submit" class="btn btn-secondary">Enviar</button>
    </div> 

</div>   