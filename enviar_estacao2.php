



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_estacao.php'",7000);
	
	
}


</script> 

<?php

session_start();
if(!isset($_SESSION["login"])   )
{
  header("Location: index.html");
  exit;
  
  
}



include "conn.php";








	

	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_estacao.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO ESTAÇÃO</title>


</head>



<body>








<?php
$estacao2 =$_POST['estacao2'];
$estacao =$_POST['estacao'];
$rota =$_POST['rota'];
$distancia =$_POST['distancia'];
$anuf =$_POST['anuf'];
$tipo =$_POST['tipo'];
$tipo_conec =$_POST['conect_tipo'];
$porta =$_POST['portas'];

$fl_beo =$_POST['fl_beo'];
$bt_beo =$_POST['bt_beo'];
$pos_beo =$_POST['pos_beo'];
$sbt_beo =$_POST['sbt_beo'];

$fl_dio =$_POST['fl_dio'];
$bt_dio =$_POST['bt_dio'];
$pos_dio =$_POST['pos_dio'];
$sbt_dio =$_POST['sbt_dio'];

$fl_dgo =$_POST['fl_dgo'];
$bt_dgo =$_POST['bt_dgo'];
$pos_dgo =$_POST['pos_dgo'];
$mod_dgo =$_POST['mod_dgo'];
$sbt_dgo =$_POST['sbt_dgo'];


$estacao_cabo = $estacao.'-'.$rota;


$sql = mysql_query ("select * from anuf where cabo_rota = '$estacao_cabo'" );
$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "DGO JÁ CADASTRADO VERIFIQUE!";
   
echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=cad_estacao.php">';

  
}
else
{
  



 



$query = "insert into estacao (estacao,localidade,anuf)";

$query.= "values ('$estacao','0','$anuf')";

if ($porta == '12')
{

$query2 = "insert into anuf (anuf,estacao,n_cabo,rota,distancia,tipo,conect_tipo,porta,cabo_rota,fl_beo,bt_beo,sbt_beo,pos_beo,fl_dio,bt_dio,sbt_dio,pos_dio,fl_dgo,bt_dgo,sbt_dgo,mod_dgo,pos_dgo)";

$query2.= "values 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','1','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','2','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','3','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','4','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','5','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','6','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','7','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','8','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','9','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','10','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','11','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','12','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo') 
    ;








";

}

if ($porta == '36')
{

  $query2 = "insert into anuf (anuf,estacao,n_cabo,rota,distancia,tipo,conect_tipo,porta,cabo_rota,fl_beo,bt_beo,sbt_beo,pos_beo,fl_dio,bt_dio,sbt_dio,pos_dio,fl_dgo,bt_dgo,sbt_dgo,mod_dgo,pos_dgo)";

$query2.= "values 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','1','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','2','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','3','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','4','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','5','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','6','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','7','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','8','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','9','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','10','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','11','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','12','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','13','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','14','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','15','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','16','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','17','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','18','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','19','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','20','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','21','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','22','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','23','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','24','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','25','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','26','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','27','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','28','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','29','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','30','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','31','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','32','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','33','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','34','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','35','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','36','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo');










";

}

if ($porta == '72')
{
  $query2 = "insert into anuf (anuf,estacao,n_cabo,rota,distancia,tipo,conect_tipo,porta,cabo_rota,fl_beo,bt_beo,sbt_beo,pos_beo,fl_dio,bt_dio,sbt_dio,pos_dio,fl_dgo,bt_dgo,sbt_dgo,mod_dgo,pos_dgo)";

$query2.= "values 

('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','1','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','2','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','3','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','4','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','5','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','6','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','7','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','8','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','9','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','10','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','11','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','12','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','13','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','14','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','15','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','16','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','17','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','18','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','19','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','20','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','21','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','22','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','23','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','24','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','25','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','26','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','27','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','28','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','29','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','30','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','31','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','32','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','33','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','34','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','35','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','36','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','37','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','38','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','39','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','40','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','41','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','42','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','43','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','44','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','45','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','46','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','47','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','48','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','49','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','50','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','51','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','52','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','53','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','54','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','55','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','56','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','57','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','58','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','59','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','60','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','61','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','62','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','63','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','64','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','65','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','66','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','67','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','68','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','69','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','70','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','71','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','72','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo');






";


}

if ($porta == '144')
{
  

  $query2 = "insert into anuf (anuf,estacao,n_cabo,rota,distancia,tipo,conect_tipo,porta,cabo_rota,fl_beo,bt_beo,sbt_beo,pos_beo,fl_dio,bt_dio,sbt_dio,pos_dio,fl_dgo,bt_dgo,sbt_dgo,mod_dgo,pos_dgo)";

 $query2.= "values 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','1','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','2','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','3','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','4','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','5','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','6','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','7','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','8','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','9','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','10','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','11','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
    ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','12','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','13','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','14','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','15','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','16','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','17','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','18','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','19','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','20','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','21','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','22','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','23','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','24','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','25','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','26','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','27','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','28','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','29','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','30','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','31','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','32','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','33','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','34','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','35','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','36','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','37','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','38','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','39','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','40','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','41','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','42','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','43','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','44','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','45','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','46','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','47','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','48','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','49','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','50','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','51','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','52','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','53','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','54','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','55','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','56','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','57','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','58','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','59','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','60','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','61','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','62','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','63','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','64','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','65','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','66','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','67','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','68','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','69','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','70','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','71','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','72','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','73','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','74','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','75','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','76','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','77','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','78','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','79','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','80','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','81','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','82','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','83','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','84','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','85','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','86','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','87','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','88','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','89','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','90','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','91','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','92','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','93','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','94','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','95','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','96','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','97','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','98','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','99','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','100','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','101','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','102','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','103','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','104','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','105','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','106','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','107','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','108','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','109','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','110','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','111','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','112','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','114','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','115','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','116','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','117','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','118','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','119','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','120','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','121','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','122','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','123','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','124','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','125','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','126','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','127','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','128','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','129','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','130','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','131','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','132','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','133','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','134','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','135','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','136','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','137','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'),
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','138','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','139','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','140','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','141','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','142','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','143','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'), 
 ('$anuf','$estacao2','$estacao','$rota','$distancia','$tipo','$tipo_conec','144','$estacao_cabo','$fl_beo','$bt_beo','$sbt_beo','$pos_beo','$fl_dio','$bt_dio','$sbt_dio','$pos_dio','$fl_dgo','$bt_dgo','$sbt_dgo','$mod_dgo','$pos_dgo'); 
 


    ";

}







$sql = mysql_query($query);
$sql2 = mysql_query($query2);


if($sql && $sql2)
{
  
  
    echo '  <h2>CADASTRADO COM SUCESSO!<br>';
  

  
  echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=pesq_'.$anuf.'.php?estacao='.$estacao_cabo.'">';
  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}




}



?>

























</body>


</html>