<?php include "conn.php"; 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != '44'  ) && ($_SESSION["acesso"] != 'ADM'  ) )
{
  header("Location: index.html");
  exit;
  
  
}





?>




<!DOCTYPE html>
<html lang="pt-br">
<head>

<script type="text/javascript">
function completar_campos(){
document.getElementById("loading").style.display = "block";
var con_consulta;
if (window.XMLHttpRequest){

con_consulta = new XMLHttpRequest();

}else{


con_consulta  = new ActiveXObject("Microsoft.XMLHTTP");



}

con_consulta.onreadystatechange = function(){

if(con_consulta.readyState ==  4 && con_consulta.status == 200){

document.getElementById("form").innerHTML = con_consulta.responseText;
document.getElementById("loading").style.display = "none";

}

}

var pt = document.getElementById("pt").value;

con_consulta.open("GET","processar.php?pt="+pt,true);
con_consulta.send(null);






}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio Caixa Fechada</x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    var data_type = 'data:application/vnd.ms-excel';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Test file.xls');
        }
    } else {
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'relatorio.xls');
    }

}





</script>





<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='pesq_44.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>PESQUISA DE LOG'S</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



     <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->


</head>

<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
  .container-fluid
  {
  background-color: orange;
  }
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }

  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}



</style>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
        <a class="navbar-brand" href="#" style="color:black;"> <?php echo $_SESSION["nome"]?></a>
    </div>
    <ul class="nav navbar-nav">

      <?php if(($_SESSION["acesso"] == 'ADM'  )){?>

       <li class="active"><a href="adm.php">Voltar</a></li>
       <li class="active"><a href="cad_estacao.php">Gerar dgo</a></li>
       <li class="active"><a class="app-menu__item " href="#" id="test" onClick="javascript:fnExcelReport();">  <i class="app-menu__icon fa fa-table"></i> </i><span class="app-menu__label"> Gerar Excel </span> </a> </li>


      <?php }  else { ?>
    
        <li class="active"><a href="logout.php">LOGOUT</a></li>
         <li class="active"><a href="modifica_senha.php">MODIFICA SENHA</a></li>
          

       <?php  } ?>
       
    
      
    </ul>
  </div>
</nav>

 <span><strong>PESQUISA POR ESTAÇÃO</strong></span><br><br><br>

  <form class="form-inline" role="form"   method="POST" action="pesq_44.php" style="margin-left:10%;">
    <div class="form-group">
   

    </div>
     

     <select class="form-control " id="estacao" name="estacao"  >

     <?php

     $sql = mysql_query ("select * from anuf where anuf = '44' group by cabo_rota" );

// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );

  


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{    

  while ($dado = mysql_fetch_assoc($sql)){   ?>


<option value="<?php echo $dado ["cabo_rota"]?>">  <?php echo $dado ["cabo_rota"];  ?> </option> 


<?php } } ?>

  </select>
 
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>

  <?php
  

  ?>


  <div class="table-responsive">
 
    
  
  <?php
  if (isset($_POST ['submit']) )
{



$estacao = $_POST['estacao'];






$sql = mysql_query ("select * from anuf where cabo_rota = '$estacao'   and anuf = '44' order by porta asc" );
$sql2 = mysql_query ("select * from anuf where cabo_rota = '$estacao'   and anuf = '44' order by porta asc" );

  


$row = mysql_num_rows($sql);
$row2 = mysql_num_rows($sql2);

 
 


$dado2 = mysql_fetch_assoc($sql2)

?>



<table class="table table-hover" id="myTable">
 
 <thead>
 
   <tr >
<tr> 
<td  style="background: #EEE8AA;" colspan="8"><strong>ESTAÇÃO </strong><?php echo $dado2 ["estacao"]?> </td>
<td  style="background: #EEE8AA;" colspan="8"><strong>N CABO: </strong><?php echo $dado2 ["n_cabo"]?> </td>
<td  style="background: #EEE8AA;" colspan="8"><strong>ROTA: </strong> <?php echo $dado2 ["rota"]?> </td>
<td  style="background: #EEE8AA;" colspan="8"><strong>DISTANCIA: </strong><?php echo $dado2 ["distancia"]?></td>
<td  style="background: #EEE8AA;" colspan="7"><strong>TIPO:</strong><?php echo $dado2 ["tipo"]?> </td>
</tr>   
<tr>
 <td colspan="1"></td>
 <td style="background: #C0C0C0;" colspan="4"><strong>BEO</strong></td>
 <td style="background: #6A5ACD;" colspan="4"><strong>DIO</strong></td>
 <td style="background: #6495ED;" colspan="5"><strong>DGO</strong></td>
 <td colspan="3"></td>
 <td style="background: #00CED1;" colspan="3"><strong>EMENDA</strong></td>
 <td style="background: #2E8B57;" colspan="6"><strong>EQUIPAMENTO</strong></td>
 <td style="background: #DEB887;" colspan="4"><strong>CONECTOR</strong></td>
</tr>
   <th>FO</th>
   <th>FL</th>
   <th>BT</th>
   <th>SBT</th>
   <th>POS</th>
 
   <th>FL</th>
   <th>BT</th>
   <th>SBT</th>
   <th>POS</th>

   <th>FL</th>
   <th>BT</th>
   <th>SBT</th>
   <th>MOD</th>
   <th>POS</th>

   <th>ANEL</th>
   <th>CONEC TIPO</th>
   <th>SIT</th>

   <th>FO</th>
   <th>DESTINO</th>
   <th>DIST</th>

   <th>TIPO</th>
   <th>COD</th>
   <th>FL</th>
   <th>BT</th>
   <th>SBT</th>
   <th>SLOT</th>

   
   <th>OBS</th>
   <th>OBJECTEL</th>
   <th>CCTO/NE</th>
   <th>DIRECAO</th>
  
  
       
      
          

          <th>ATUALIZAR</th>
   




   </tr>
 </thead>

 <?php


{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
 <td> <?php echo $dado ["porta"];  ?></td>
 <td> <?php echo $dado ["fl_beo"];  ?></td>     
 <td> <?php echo $dado ["bt_beo"];  ?></td>
 <td> <?php echo $dado ["sbt_beo"];  ?></td>      
 <td> <?php echo $dado ["pos_beo"];  ?></td>
 <td> <?php echo $dado ["fl_dio"];  ?></td>
 <td> <?php echo $dado ["bt_dio"];  ?></td>
 <td> <?php echo $dado ["sbt_dio"];  ?></td>
 <td> <?php echo $dado ["pos_dio"];  ?></td>
 <td> <?php echo $dado ["fl_dgo"];  ?></td>
 <td> <?php echo $dado ["bt_dgo"];  ?></td>
 <td> <?php echo $dado ["sbt_dgo"];  ?></td>
 <td> <?php echo $dado ["mod_dgo"];  ?></td>
 <td> <?php echo $dado ["pos_dgo"];  ?></td>
 <td> <?php echo $dado ["anel"];  ?></td>
 <td> <?php echo $dado ["conect_tipo"];  ?></td>
 <td> <?php echo $dado ["sit"];  ?></td>
 <td> <?php echo $dado ["fo_emenda"];  ?></td>
 <td> <?php echo $dado ["destino_emenda"];  ?></td>
 <td> <?php echo $dado ["dist_emenda"];  ?></td>
 <td> <?php echo $dado ["tipo_eqp"];  ?></td>
 <td> <?php echo $dado ["cod_fab_eqp"];  ?></td>
 <td> <?php echo $dado ["fl_eqp"];  ?></td>
 <td> <?php echo $dado ["bt_eqp"];  ?></td>
 <td> <?php echo $dado ["sbt_eqp"];  ?></td>
 <td> <?php echo $dado ["slot_eqp"];  ?></td>

 <td> <?php echo $dado ["obs_conec"];  ?></td>
 <td> <?php echo $dado ["nome_objectel_conec"];  ?></td>
 <td> <?php echo $dado ["ccto_ne_conec"];  ?></td>
 <td> <?php echo $dado ["direcao_conect"];  ?></td>


 <?php $patri = $dado ["patrimonio"];  ?>










<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['id'];  ?>" >ATUALIZAR</button> </td>


<div class="modal fade" id="myModal<?php echo $dado ['id'];  ?>" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">RELATÓRIO.<h4>
         <form role="form" id="form" name="seachform" method="post" action="pesq_44.php " >
  <div class="form-group" >
 
    <input type="hidden" class="form-control" name="id"  value="<?php echo $dado["id"] ?>" readonly required>
    <input type="hidden" class="form-control" name="cabo_rota"  value="<?php echo $dado["cabo_rota"] ?>" readonly required>
    

    <input  class="form-control" type="hidden" name="anuf" id="anuf" value="<?php echo $dado["anuf"] ?>" readonly required>
    <div class="form-group" >
    <label for="email">POSIÇÃO: </label>
    <input type="text" class="form-control" id="porta" value="<?php echo $dado["porta"] ?>" name="porta" readonly  required>
    </div>
    
    <label for="email">ANEL: </label>
    <input type="text" class="form-control" value="<?php echo $dado["anel"] ?>" name="anel" maxlength="45" required>
    
    <label for="email">SIT: </label>
    <input type="text" class="form-control" value="<?php echo $dado["sit"] ?>" name="sit" maxlength="45" required> <br>
    <h3 style="text-align:center;" >EMENDA: </h3> <br>
    
    <label for="email">Nº FO: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["fo_emenda"] ?>" name="fo_emenda" maxlength="45" required>
    <label for="email">DESTINO: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["destino_emenda"] ?>" name="destino_emenda"    maxlength="45" required>
    <label for="email">DIST: </label>
    <input type="text" class="form-control" value="<?php echo $dado["dist_emenda"] ?>" name="dist_emenda" maxlength="45" required> <br>

    <h3 style="text-align:center;" >EQUIPAMENTO: </h3> <br>
    
    <label for="email">COD: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["cod_fab_eqp"] ?>" name="cod_fab_eqp" maxlength="45" required>
    <label for="email">TIPO: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["tipo_eqp"] ?>" name="tipo_eqp" maxlength="45" required>
    <label for="email">FL: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["fl_eqp"] ?>" name="fl_eqp" maxlength="45" required>
    <label for="email">BT: </label>
    <input type="text" class="form-control" value="<?php echo $dado["bt_eqp"] ?>" name="bt_eqp" maxlength="45" required>
    <label for="email">SBT: </label>
    <input type="text" class="form-control" value="<?php echo $dado["sbt_eqp"] ?>" name="sbt_eqp" maxlength="45" required>
    <label for="email">SLOT: </label>
    <input type="text" class="form-control" value="<?php echo $dado["slot_eqp"] ?>" name="slot_eqp" maxlength="45" required>

    <h3 style="text-align:center;" >CONECTOR: </h3> <br>
    
    
    <label for="email">OBS: </label>
    <textarea class="form-control" rows="5" id="obs" name="obs_conec" placeholder="Máximo 200 caracteres" maxlength="200"><?php echo $dado["obs_conec"] ?></textarea>
    <label for="email">OBJECTEL: </label>
    <input type="text" class="form-control" value="<?php echo $dado["nome_objectel_conec"] ?>" name="nome_objectel_conec"   maxlength="45" required>
    <label for="email">CCT/NE: </label>
    <input type="text" class="form-control" value="<?php echo $dado["ccto_ne_conec"] ?>" name="ccto_ne_conec" maxlength="45" required>
    <label for="email">DIREÇÃO: </label>
    <input type="text" class="form-control" value="<?php echo $dado["direcao_conect"] ?>" name="direcao_conect"    maxlength="45" required>
      
     
 <button type="submit"  name="submit2" id="submit2" class="btn btn-default"  > Atualizar</button> 
 
  
</form>




        <!-- TESTE PARA FORM-->










         <!-- -->
        
        


       
         
        
        </h4>
        <div class="modal-body">



        

         
    
          
            

       
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



          
        </div>
      </div>
      
    </div>
  </div>
  
</div>


      </tr> 
  <?php } 
while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta = $dado ["conta"]; 
  }
   }    }

    ?>



<?php

    if (isset($_GET ['estacao']) )
{



$estacao = $_GET['estacao'];




$sql = mysql_query ("select * from anuf where estacao = '$estacao' and anuf = '$anuf' order by porta asc" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );

  


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
 <td> <?php echo $dado ["estacao"];  ?></td>     
<td> <?php echo $dado ["porta"];  ?></td>
<td> <?php echo $dado ["cabo"];  ?></td>
<td> <?php echo $dado ["ocupacao"];  ?></td>
<td> <?php echo $dado ["enlace"];  ?></td>
<td> <?php echo $dado ["obs"];  ?></td>



 <?php $patri = $dado ["patrimonio"];  ?>










<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['id'];  ?>" >ATUALIZAR</button> </td>


<div class="modal fade" id="myModal<?php echo $dado ['id'];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">RELATÓRIO<h4>
         <form role="form" id="form" name="seachform" method="post" action="pesq_44.php " >
  <div class="form-group" >
 
    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $dado["id"] ?>" readonly required>
    <label for="email">ESTAÇÃO: </label>
    <input type="text" class="form-control" name="estacao" id="estacao" value="<?php echo $dado["estacao"] ?>" readonly required>

    <input  class="form-control" type="hidden" name="anuf" id="anuf" value="<?php echo $dado["anuf"] ?>" readonly required>
    <label for="email">POSIÇÃO: </label>
    <input type="text" class="form-control" id="porta" value="<?php echo $dado["porta"] ?>" name="porta" readonly  required>
    <label for="email">CABO / ROTA: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["cabo"] ?>" name="cabo"   required>
    <label for="email">OCUPAÇÃO: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["ocupacao"] ?>" name="ocupacao"   required>
    <label for="email">ENLACE: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["enlace"] ?>" name="enlace"   required>
    <div class="form-group">
    <label for="email">OBS: </label>
  <textarea class="form-control" rows="5" id="obs" name="obs" placeholder="Máximo 300 caracteres" maxlength="300"></textarea>
    </div>
     
 <button type="submit"  name="submit2" id="submit2" class="btn btn-default"  > Atualizar</button> 
 
 


  
</form>




        <!-- TESTE PARA FORM-->










         <!-- -->
        
        


       
         
        
        </h4>
        <div class="modal-body">



        

         
    
          
            

       
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



          
        </div>
      </div>
      
    </div>
  </div>
  
</div>


      </tr> 
  <?php } 
while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta = $dado ["conta"]; 
  }
   }    }

    ?>
  <span class="label label-primary" style="float:right; margin-right:2%;"><?php echo $conta;?></span>


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>

<?php








if (isset($_POST ['submit2']) )
{

  $rota =$_POST['rota'];
  $id =$_POST['id'];

  
  $anel =$_POST['anel'];

  $sit =$_POST['sit'];
  
  $fo_emenda =$_POST['fo_emenda'];
  $destino_emenda =$_POST['destino_emenda'];
  $dist_emenda =$_POST['dist_emenda'];

  $tipo_eqp =$_POST['tipo_eqp'];
  $cod_fab_eqp =$_POST['cod_fab_eqp'];
  $fl_eqp =$_POST['fl_eqp'];
  $bt_eqp =$_POST['bt_eqp'];
  $sbt_eqp =$_POST['sbt_eqp'];
  $slot_eqp =$_POST['slot_eqp'];


  $obs_conec =$_POST['obs_conec'];
  $nome_objectel_conec =$_POST['nome_objectel_conec'];
  $ccto_ne_conec =$_POST['ccto_ne_conec'];
  $direcao_conect =$_POST['direcao_conect'];

  $porta =$_POST['porta'];
  $cabo_rota =$_POST['cabo_rota'];


$query = "update ANUF SET  anel = '$anel', sit = '$sit',fo_emenda = '$fo_emenda',destino_emenda = '$destino_emenda',dist_emenda = '$dist_emenda',tipo_eqp = '$tipo_eqp',cod_fab_eqp = '$cod_fab_eqp',fl_eqp = '$fl_eqp',bt_eqp = '$bt_eqp',sbt_eqp = '$sbt_eqp',slot_eqp = '$slot_eqp',obs_conec = '$obs_conec',nome_objectel_conec = '$nome_objectel_conec',ccto_ne_conec = '$ccto_ne_conec',direcao_conect = '$direcao_conect' where id = '$id'";


$query2 = "insert into log (id_ga,nome_ga,data_atu,cabo_rota,porta)";

$query2.= "values ('".$_SESSION["id"]."','".$_SESSION["nome"]."',NOW(),'$cabo_rota','$porta')";







$sql = mysql_query($query);
$sql2 = mysql_query($query2);


if($sql && $sql2 )
{
  
  
    echo ' <h2>ATUALIZADA  COM SUCESSO!!';

  echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=pesq_44.php?estacao='.$cabo_rota.'">';
  

  

  
}
else
{
  
echo ' <h2>ERRO NO CADASTRO!!';

  
}


}



 

?>

</body>
</html> 

