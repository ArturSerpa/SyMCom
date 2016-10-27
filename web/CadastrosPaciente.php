<?php 
require 'Header.php';
require 'Sidebar.php';
include 'config.php';
?>

 <script type="text/javascript" src="Valida_cpf.js"></script>


   
<div class="navbar-inner well well-small span10 desktop2">
       
      <div class="form_paciente">
       <form name="cadastro_pct" method="post" action="CadastroBE_paciente.php">
        <div class="form-group">
    	  <label for="Nome">Nome:</label>
    	  <input name="nome_pct" type="text" class="form-control" value="<?php echo $nome_pct; ?>" id="nome_pct">
          
  	    </div>
       
        <div class="form-group">
          <label for="senha">CPF:</label>
          <input type="text" name="cpf" id="cpf" onblur="javascript: validarCPF(this.value);" onkeypress="javascript: mascara(this, cpf_mask);"  maxlength="14" value="<?php echo $cpf_pct; ?>" />
        </div>
           <br>
        
        <div class="form-group">
          <label for="sexo">Sexo:
             <input type="radio" name="sexo_pct" value="Masculino"><?php if($sexo_pct == 'Masculino'){echo 'checked';}?> Masculino
             <input type="radio" name="sexo_pct" value="Feminino"><?php if($sexo_pct == 'Feminino'){echo 'checked';}?> Feminino
          </label>
        </div>
           <br>
        <div class="form-group">
          <label for="nascimento">Data de nascimento:</label>
             <input name="data_nasc_pct" type="date" value="<?php echo $data_nasc_pct; ?>" id="data_nasc_pct"> 
        </div>
           
        <div class="form-group">
         <label for="estado_pct">UF:</label>
          <select name="estado_pct" size="1" id="estado_pct" value="<?php echo $estado_pct; ?>"/>
            <option selected="">Escolha o estado(UF)</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espirito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MT">Mato Grosso</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
          </select>
            
        </div>
        
        <div class="form-group">
    	  <label for="cidade">Cidade:</label>
              <input name="cidade_pct" type="text" value="<?php echo $cidade_pct; ?>" id="cidade_pct">
          
  	</div>
           <div class="form-group">
    	  <label for="bairro">Bairro:</label>
               <input name="bairro_pct" type="text" value="<?php echo $bairro_pct; ?>" id="bairro_pct">
          
  	</div>
           <div class="form-group">
    	  <label for="logradouro">Logradouro:</label>
              <input name="logradouro_pct" type="text" value="<?php echo $logradouro_pct; ?>" id="logradouro_pct">
          
  	</div>
           <div class="form-group">
    	  <label for="numero">Numero:</label>
          <input name="numero_pct" type="number" value="<?php echo $numero_pct; ?>" id="numero_pct">
          
  	</div>
           <div class="form-group">
    	  <label for="telefone">Telefone:</label>
          <input name="telefone_pct" type="text" value="<?php echo $telefone_pct; ?>" id="telefone_pct">
          
  	</div>
           <div class="form-group">
    	  <label for="Email">Email:</label>
          <input name="email_pct" type="email" value="<?php echo $email_pct; ?>" id="email_pct">
          
  	</div>
        <div>
            <label for="Email">Foto:</label>
        <input type="file" name="arquivos" multiple/>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary" value="Enviar" onclick="CadastroBE_paciente.php">Cadastrar</button>
            <button type="button" class="btn" onclick="reset">Cancelar</button>
        </div>
       </form>
       </div>
      
      </div>
     
   
   </div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
