@csrf   
  <!--Forms de cadastro de Material-->
<div class="container border">     
  <div class="form-group mb-3">
      <label for="nameidentification" class="form-label">Nome de identificação:</label>
      <input class="form-control" type="text" name="name" id="name" placeholder="Nome de identificação" 
        value="{{ $material->nameidentification ?? old('nameidentification') }}">
    </div>    
    <div class="form-group">      
      <label for="description">Descrição:</label>
        <textarea class="form-control" rows="3" id="name" id="textarea" placeholder= "Nome de identificação" 
          value="{{ $material-> description?? old('description') }}"></textarea>      
    </div>   
    <div class="form-group mb-3">
      <label for="qty" class="form-label">Quantidade:</label>
      <input class="form-control" type="number" name="qty" placeholder="1" value="{{$material->qty ?? old ('qty')}}">  
    </div>   
    <div class="form-group mb-3">
      <label for="qty" class="form-label">Qrcode:</label>
      <input class="form-control" type="text" name="qrcode"  value="{{ $material->qrcode ?? old ('qrcode')}}">  
    </div> 
    <div class="form-group mb-3">    
        <button type="submit" class="btn btn-secondary">Salvar</button>
    </div> 
</div>   