



<?php
 include "coon.php"; 


 session_start();

 session_start();

         if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
            {
                 header("Location: index.html");
                  exit;
            }




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">




<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>KMZ </title>

<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='dashboard.php'",3000);
  
  
}
</script> 


</head>



<body>


<?php

$id = $_POST["id"];
$anuf = $_POST["anuf"];
$trecho = $_POST["trecho"];










$query ="update rota set anuf='$anuf', trecho='$trecho'  where id = '$id'";






$sql = mysql_query($query);












if($sql )
{
  
  
    echo ' <h2>EDITADA COM SUCESSO!';
  
	echo "<script>saidasuccessfully()</script>";
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}










/*
$permite = array('image/jpg', 'image/jpeg' , 'image/png');
    $type =$_FILES['foto_ant'] ['type'];
   
    
       

//  ------------------------------------------ VERIFICACAO TAMANHO FOTOS ------------------------------------------------------- 


            $tamanho1 =$_FILES['foto_ant']['size'];
          

           



// ------------------------------------------------------------- verificar vazios---

            if (empty($type))
            {

               $type = 'image/png';



            }

            
           
             

//-----------------------------------------------------------------------------------





































if (!in_array($type,$permite)  )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
  echo "<script>saidasuccessfully()</script>";
}


*/







  
    /*

$i = 0;

                foreach ($values_gender2 as $values2){

                  

             

                    $query1 = "insert into foto (prot,foto,coment)";

                    $query1.= "values ('$protocolo','$Nome','$values2')";





                    ++$i;

$sql1 = mysql_query($query1);

                 }   */









































  





               

































?>




















</body>


</html>