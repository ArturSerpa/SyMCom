<?php 
require 'Header.php';
require 'Sidebar.php';
?>
   
<div class="navbar-inner well well-small span10 desktop2">
       
      <div class="form_paciente">
       <form>
        <div class="form-group">
    	  <label for="descricao">Descrição:</label>
    	  <input type="text" class="form-control" id="descricao">
          
  	</div>
            
        <div class="form-group">
             <label for="observacao">Observação:</label>
             <textarea class="form-control" rows="7" id="observacao" style="min-width: 80%"></textarea>
        </div>   
        <div class="form-group">
          <label for="quantidade">Quantidade:</label>
          <input type="number" class="form-control" id="quantidade">
          
        </div>
        <div class="form-group">
          <label for="unidade_medida">Unidades de medida:</label>
          <input type="number" class="form-control" id="unidade_medida">
          
        </div>       
                        
        <div class="form-actions">
              <button type="submit" class="btn btn-primary">Salvar mudanças</button>
            <button type="button" class="btn">Cancelar</button>
          </div>
       </form>
       </div>
      
      </div>
     
   
   </div>


    
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
