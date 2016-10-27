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
  
  
 <header>
  
 
   <div class="navbar">
    <div class="navbar-inner">
     <div class="container navbar-inner navbar-fixed-top">
 
      <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
      <a class="brand" href="#">SyMCom</a>
      
       <h4 style="text-align:right; margin-left:60%"> Bem vindo,&nbsp;<?php echo $var  =  $_SESSION['nome'] ?>.  &nbsp&nbsp&nbsp;       <a href="Login.php">Sair</a></h4> 
 
      <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
      </div>
 
      </div>
     </div>
    </div>
  
<!--  <div class="container-fluid">-->
   <div class="row-fluid">
    
       <div class="navbar-inner span2 logo">
         <a class="brand" href="inicio.php">
	        <img src="Imagens/logo.png" style="margin-top:7%"/>
       	 </a>
       </div>
    
     <div class="navbar-inner navbar-inverse span10 well well-small nav-cabeca" style="overflow:auto;">
         <div class="offset1 span2 ">
  	  	
       <a  class="brand" href="Agenda.php">
		<img src="Imagens/Agenda.png" />
       </a>
         </div>
         <div class=" span2">
             <a class="brand" href="pacientes.php">
        <img src="Imagens/Paciente.png"/>
       </a>
         </div>
             <div class=" span2">
       <a class="brand" href="relatorios.php">
        <img src="Imagens/Relatorios.png"/>
       </a>
             </div>
                 <div class=" span2">
       <a class="brand" href="#">
        <img src="Imagens/Estoque.png"/>
       </a> 
                 </div>    
     </div>
    
   </div>
 
 </header>
      
