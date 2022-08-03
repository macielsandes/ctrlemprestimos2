@csrf   
  <!--Forms de cadastro de Material-->
<div class="container border">  
    <div class="form-group mb-3">
      <label for="name" class="form-label">Nome de identificação</label>
      <input class="form-control" type="text" name="name" id="name" placeholder= "Nome de identificação do material" 
        value="{{ $material->description ?? old('description') }}">
     </div>
     <div class="form-group mb-3">
      <label for="Textarea">Descrição:</label>
      <textarea class="form-control" placeholder="Adicione detalhes sobre o material" 
            id="textarea" style="height: 100px"></textarea>      
    </div>
    <div class="form-group mb-3">
      <label for="qty" class="form-label">Quantidade:</label>
      <input class="form-control" type="number" name="qty" placeholder="1" value="{{ $material->qty ?? old ('qty')}}">  
    </div>   

    <div class="form-group mb-3">    
        <button type="submit" class="btn btn-secondary">Enviar</button>
    </div> 
</div>   