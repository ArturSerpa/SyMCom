<?php 
require 'Header.php';
require 'Sidebar.php';
?>
   
<div class="well well-small span10 desktop2">
       
      <div class="form_paciente">
       <form>
        <div class="form-group">
    	  <label for="Nome">Nome do paciente:</label>
    	  <input type="text" class="form-control" id="nome_pct">
          
  	    </div>
  
           
        <div class="form-group">
          <label for="data">Data da consulta:</label>
             <input type="date" class="form-control" id="data_consulta">
          
        </div>
               
        
        <div class="form-group">
    	  <label for="duracao">Duração:</label>
          <input type="number" class="form-control" id="cidade">
        </div>  
  	<div class="form-group">
         <label for="Prioridade">Prioridade:</label>
           <select name="prioridade" size="1" id="prioridade" value="<?php echo $prioridade; ?>"/>          
             <option value="1">Não urgente</option>
             <option value="2">Pouco urgente</option>
             <option value="3">Urgente</option>
             <option value="4">Muito urgente</option>
             <option value="5">Emergência</option>
           </select>
        </div> 
          
        <div class="form-group">
             <label for="conclusao">Conclusão da consulta:</label>
             <textarea class="form-control" rows="7" id="conclusao_consulta" style="min-width: 80%"></textarea>
        </div>
        <div class="form-group">
         <label for="problema">Problema:</label>
           <select name="problema" size="1" id="problema" value="<?php echo $problema; ?>"/>          
             <option value="1">adicionar</option>
           </select>
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
