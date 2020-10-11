<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>

<?php
include "conn.php";

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>







<meta charset="UTF-8"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">








  <link rel="icon" href="img/logo_oi.png">







</head>



<body>



<?php

session_start();
if(!isset($_SESSION["senha"]) && !isset($_SESSION["login"]))
{
	header("Location: index.html");
	exit;
	
	
}

else
{

if($_SESSION['acesso'] == '42')
{
	
	header("Location: pesq_42.php");
}

if($_SESSION['acesso'] == '43')
{
	
	header("Location: pesq_43.php");
}


if($_SESSION['acesso'] == '44')
{
	
	header("Location: pesq_44.php");
}

if($_SESSION['acesso'] == '45')
{
	
	header("Location: pesq_45.php");
}
if($_SESSION['acesso'] == '41')
{
	
	header("Location: pesq_41.php");
}
if($_SESSION['acesso'] == '46')
{
	
	header("Location: pesq_46.php");
}
if($_SESSION['acesso'] == 'ADM')
{
	
	header("Location: adm.php");
}



if($_SESSION['acesso'] != '41'  && $_SESSION['acesso'] != '42'  && $_SESSION['acesso'] != '43' && $_SESSION['acesso'] != '44' && $_SESSION['acesso'] != '45' && $_SESSION['acesso'] != '46' && $_SESSION['acesso'] != 'ADM' )
{
	
	header("Location: index.html");
}






}
	

	
	




?>

 





















</body>

</html>