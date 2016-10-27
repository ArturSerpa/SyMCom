<?php include 'config.php' ?>
<?php session_start() ?>
<!DOCTYPE html>
<html>
  <head>
    <title>SyMCom</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="estilo.css" rel="stylesheet" media="screen">
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
     
     <h1 style="text-align:center; color:#09F"> Bem vindo ao SyMCom! </h1></br>
     <h2 style="text-align:center; color:#09F"> Para o uso do sistema, faça seu Login. </h2><br>
     </div>
     </div>
    </div>
   </div>
  
   <div class="container-fluid">
    <div class="row-fluid">
     <div class="navbar-inner login span3 offset4"">
     
     <div style="margin-top:10px; margin-left:32px">
     
     <form method="post" action="validar.php">
        <div class="form-group">
    	  <label for="user">Usuário:</label>
    	  <input name="user_login" type="text" value="<?php echo $user_login;?>" id="user_login">
  	    </div>
       
        <div class="form-group">
    	  <label for="cpf">Senha:</label>
     	  <input name="senha_login" type="password" value="<?php echo $senha_login;?>" id="senha_login">
  	    </div>
        
        <button name="submit" type="submit" value="Entrar" onClick="validar.php" class="btn btn-default">Entrar</button>
    </form>
    
    </div>
   </div>
  </div>
     
     
  
  <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>