<?php
include "coon.php";

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<script type="text/javascript">
function loginsuccessfully()
{
	setTimeout("window.location='paine.php'",3000);
	
	
}

function loginfailed()

{
	
	setTimeout("window.location='index.html'",3000);
	
}

</script>





  <link rel="icon" href="img/logo_oi.png">
<meta charset="UTF-8"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body>





<?php

$senha=$_POST['senha'];
$login=$_POST['login'];


$sql = mysql_query("select * from usuario where senha  = '$senha' and login = '$login' ");




$row = mysql_num_rows($sql );

	
if($row > 0  )
{
	
	while ($linha =  mysql_fetch_assoc($sql) 	)
	{
	$nome = $linha['nome'];
	$id = $linha['id'];
  $login = $linha['login'];
  $senha = $linha['senha'];
  
  $acesso = $linha['acesso'];
 
 
    
	
	
	}
	session_start();
	
	$_SESSION['senha']=$senha;
	$_SESSION['id']=$id;
	$_SESSION['login'] =$login;

	$_SESSION['nome'] =$nome;
	$_SESSION['acesso'] =$acesso;




	echo "<h2 align='center'>Oi $nome! Você foi logado (a) com sucesso!<h2> <br> <img src='img/logo_serede.png' style=' width: 80px; height:80px; padding-left:40%; '  > ";

	 echo "<script>loginsuccessfully()</script>";

	
}
else
{
	echo "<h2 align='center'>Senha de usuário inválida<h2>";
	echo "<script>loginfailed()</script>";
	
}

?>





















</body>


</html>