<?php 
	  require 'config.php'; 
?>

<?php session_start() ?>

<!DOCTYPE html>
<html>
  <head>
    <title>SyMCom</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="estilo.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="Valida_cpf.js"></script>
  </head>
  <body class="corpo">
  
   <div class="container-fluid">
     <div class="row-fluid">
         <div class="span2" style="margin-top: 15px">
         <a class="brand" href="login.php">
	     <img src="Imagens/logo.png"/>
       </a>
     </div>    
     <div class="span7">
     <br>
     
     <h1 style="text-align:center; color:#09F"> Cadastro de usuário </h1></br>
     <h2 style="text-align:center; color:#09F"> Para cadastrar um novo usuário, preencha os campos abaixos. </h2><br>
     </div>
     </div>
    </div>
   </div>
  
   <div class="container-fluid">
    <div class="row-fluid">
     <div class="navbar-inner cadastro_user span3 offset4" >
     
     <div style="margin-top:0px; margin-left:45px">
     
     <form name="cadastro" method="post" action="cadastrar.php">
        <div class="form-group">
    	  <label for="nome">Nome:</label>
    	  <input name="nome" type="text" value="<?php echo $nome; ?>" id="nome">
  	    </div>
       
        <div class="form-group">
    	  <label for="senha">Senha:</label>
     	  <input name="senha" type="password" value="<?php echo $senha; ?>" id="senha">
  	    </div>
        
        <div class="form-group">
          <label for="senha">CPF:</label>
          <input type="text" name="cpf" id="cpf" onblur="javascript: validarCPF(this.value);" onkeypress="javascript: mascara(this, cpf_mask);"  maxlength="14" value="<?php echo $cpf; ?>" />
        </div>
        
        <div class="form-group">
          <label for="data_nasc_user">Data de nascimento:</label>
          <input name="data_nasc_user" type="date" value="<?php echo $data_nasc_user; ?>" id="data_nasc_user" />
        </div>
        
        <div class="form-group">
         <label for="tipo">Função:</label>
           <select name="tipo" size="1" id="tipo" value="<?php echo $tipo; ?>"/>          
             <option value="Medico">Médico</option>
             <option value="Recepcionista">Recepcionista</option>
             <option value="Administrador">Administrador</option>
           </select>
           
        </div>
        <br>
        
        <button name="submit" type="submit" value="Enviar" onClick="cadastrar.php" class="btn btn-default">Cadastrar</button>
        <a href="Login.php"><button type="button" value="Sair" class="btn btn-default">Sair</button></a>
        
    </form>
    
   </div>
    
    </div>
   </div>
  </div>
     
     
  
  <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>