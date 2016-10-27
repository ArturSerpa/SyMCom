<?php

include "config.php";

$nome = trim($_POST['nome']);
$senha = trim($_POST['senha']);
$cpf = substr_replace(substr_replace(substr_replace( $cpf, '-', 9, 0 ), '.', 6, 0 ), '.', 3, 0 );
$data_nasc_user = mysql_real_escape_string($_POST['data_nasc_user']);
$data_nasc_user = date('Y-m-d', strtotime(str_replace('-', '/', $data_nasc_user)));
$tipo = trim($_POST['tipo']);


$sql = mysql_query(


"INSERT INTO usuario
(senha, nome, cpf, data_nascimento, data_cadastro, tipo, ativo)

VALUES
('$senha','$nome','$cpf','$data_nasc_user', now(),'$tipo', 1)")

or die(msql_error());

if(!sql)
{
	echo "Ocorreu um erro, contate";
}
else
{
	$usuario_id = mysql_insert_id();
			$mensagem = "Usuário cadastrado com sucesso!";
		echo "<script type='text/javascript'>
		   		alert('$mensagem');
				window.location.href = 'Cadastro_usuario.php';
		      </script>";
}
?>

<?php
 header("Location: http://localhost/master/web/Cadastro_usuario.php");
 ?>
