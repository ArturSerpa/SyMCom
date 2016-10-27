<?php 

	include "config.php";

	$sql = mysql_query("SELECT nome,cpf,data_nascimento,sexo,uf,cidade,bairro,logradouro,numero,telefone,email FROM paciente");
		
		while($exibe = mysql_fetch_assoc($sql))
		{ 
  		 	$nome_paciente = $exibe['nome'];
		  	$cpf_paciente = $exibe['cpf'];
		    $datanasc_paciente = $exibe['data_nascimento'];
		  	$sexo_paciente = $exibe['sexo'];
		  	$uf_paciente = $exibe['uf'];
		  	$cidade_paciente = $exibe['cidade'];
		  	$bairro_paciente = $exibe['bairro'];
		  	$logradouro_paciente = $exibe['logradouro'];
		  	$numero_paciente = $exibe['numero'];
		  	$telefone_paciente = $exibe['telefone'];
		  	$email_paciente = $exibe['email'];
 	   
	 	    echo "<table>";
	 		 echo "<tr>";
			 
    			echo "<td><h4>{$nome_paciente}</h4></td>";
	 	     	echo "<td><h4>{$cpf_paciente}</h4></td>";
		 		echo "<td><h4>{$datanasc_paciente}</h4></td>";
		 		echo "<td><h4>{$sexo_paciente}</h4></td>";
		 		echo "<td><h4>{$uf_paciente}</h4></td>";
		 		echo "<td><h4>{$cidade_paciente}</h4></td>";
		 		echo "<td><h4>{$bairro_paciente}</h4></td>";
		 		echo "<td><h4>{$logradouro_paciente}</h4></td>";
		 		echo "<td><h4>{$numero_paciente}</h4></td>";
		 		echo "<td><h4>{$telefone_paciente}</h4></td>";
		 		echo "<td><h4>{$email_paciente}</h4></td>";
				
	  		echo "</tr>";
	 	   echo "</table>";
	    }
?>
     

