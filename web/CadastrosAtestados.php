<?php 
require 'Header.php';
require 'Sidebar.php';
?>
   
<div class="navbar-inner well well-small span10 desktop2">
       
      <div class="form_paciente">
       <form>
        <div class="form-group">
    	  <label for="Nome">Nome do paciente:</label>
    	  <input type="text" class="form-control" id="nome_pct">
          
  	    </div>
  
           
        <div class="form-group">
          <label for="data_emissao">Data da emissão:</label>
             <input type="date" class="form-control" id="data_emissao">
          
        </div>
               
        <div class="form-group">
             <label for="descricao">Descrição:</label>
             <textarea class="form-control" rows="7" id="descricao" style="min-width: 80%"></textarea>
        </div>
        <div class="form-group">
    	  <label for="Tempo">Tempo de atestado:</label>
          <input type="number" class="form-control" id="tempo">
        </div>
         
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Salvar mudanças</button>
            <button type="button" class="btn">Cancelar</button>
          </div>
       </form>
       </div>
      
      
     
   
   </div>


    
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
