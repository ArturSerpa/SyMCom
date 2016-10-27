<?php

include "config.php";

$paciente = trim($_POST['paciente']);
$usuario = trim($_POST['usuario']);
$observacao = trim($_POST['observacao']);
$pioridade = trim($_POST['prioridade']);
//$data_nasc_user = mysql_real_escape_string($_POST['data_nasc_user']);
//$data_nasc_user = date('Y-m-d', strtotime(str_replace('-', '/', $data_nasc_user)));


$sql = mysql_query(


"INSERT INTO atendimento
(paciente,usuario,data_atendimento,observacao,prioridade)

VALUES
('$paciente','$usuario',now(),'$observacao','$prioridade')")

or die(msql_error());

if(!sql)
{
	echo "Ocorreu um erro, contate";
}
else
{
			$mensagem = "Atendimento cadastrado com sucesso!";
		echo "<script type='text/javascript'>
		   		alert('$mensagem');
				window.location.href = 'CadastroAtendimento.php';
		      </script>";
}
?>

<?php
 header("Location: http://localhost/master/web/CadastroAtendimento.php");
 ?>
