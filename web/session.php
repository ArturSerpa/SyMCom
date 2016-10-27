<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['user_login'];
   
   $ses_sql = mysqli_query($db,"SELECT * FROM usuario WHERE nome = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['nome'];
   
   if(!isset($_SESSION['user_login'])){
      header("location:login.php");
   }
?>