<?php 

include "config.php";

	$nome_pct = trim($_POST['nome_pct']);
	$cpf_pct = trim($_POST['cpf_pct']);
	$sexo_pct = trim($_POST['sexo_pct']);
	$data_nasc_pct = mysql_real_escape_string($_POST['data_nasc_pct']);
    $data_nasc_pct = date('Y-m-d', strtotime(str_replace('-', '/', $data_nasc_pct)));
	$estado_pct = trim($_POST['estado_pct']);
	$cidade_pct = trim($_POST['cidade_pct']);
	$bairro_pct = trim($_POST['bairro_pct']);
	$logradouro_pct = trim($_POST['logradouro_pct']);
	$numero_pct = trim($_POST['numero_pct']);
	$telefone_pct = trim($_POST['telefone_pct']);
	$email_pct = trim($_POST['email_pct']);
	
	$sql = mysql_query(

	"INSERT INTO paciente
	(nome, cpf, sexo, data_nascimento, uf, cidade, bairro, logradouro, numero, telefone, email, data_cadastro, ativo)

	VALUES
	('$nome_pct','$cpf_pct','$sexo_pct','$data_nasc_pct','$estado_pct','$cidade_pct',   '$bairro_pct','$logradouro_pct','$numero_pct','$telefone_pct','$email_pct',now(), 1)")

	or die(msql_error());
	
		if(!sql)
		{
			echo "Ocorreu um erro, contate";
		}
		
		else
		{
			$paciente_id = mysql_insert_id();
			$mensagem = "Paciente cadastrado com sucesso!";
		echo "<script type='text/javascript'>
		   		alert('$mensagem');
				window.location.href = 'CadastrosPaciente.php';
		      </script>";
		}
?>




