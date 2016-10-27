<?php
   include("config.php");
   session_start();
 
      $user_login = trim($_POST['user_login']);
	  $senha_login = trim($_POST['senha_login']); 

	  $login = mysql_query("SELECT * FROM usuario WHERE nome = '$user_login' AND senha = '$senha_login'");
	  
	  if (mysql_num_rows($login) == 1) 
	  {
		$_SESSION['nome'] = mysql_result($login, 0, 2);
 
		header("Location:inicio.php");
	  } 
	  
	  else 
	  {
 		$mensagem = "Usuário ou senha incorretos, tente novamente!";
		
		echo "<script type='text/javascript'>
		   		alert('$mensagem');
				window.location.href = 'Login.php';
		      </script>";
	  }
?>