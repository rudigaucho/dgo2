

<?php include "conn.php"; 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'ADM' ))
{
  header("Location: index.html");
  exit;
  
  
}


?>


<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_mat.php'",7000);
	
	
}


</script> 




<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_usu.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO USUÁRIOS</title>


</head>



<body>








<?php

$id =$_POST['id'];
$login =$_POST['login'];
$senha =$_POST['senha'];
$acesso =$_POST['acesso'];
$nome =$_POST['nome'];



$sql = mysql_query ("select * from usuario where id = '$id'" );
$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "USUÁRIO JÁ CADASTRADO VERIFIQUE!";
   
  

  
}
 else
 {

  



 



$query = "insert into usuario (id,nome,login,senha,acesso)";

$query.= "values ('$id','$nome','$login','$senha','$acesso')";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo '  <h2>CADASTRADO COM SUCESSO!<br>';
  
  echo "<script>saidasuccessfully()</script>";
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}




}



?>

























</body>


</html>