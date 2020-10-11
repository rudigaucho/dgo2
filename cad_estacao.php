<?php include "conn.php"; 


session_start();
if(!isset($_SESSION["login"])  )
{
  header("Location: index.html");
  exit;
  
  
}


?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_oi.ico">






<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='cad_mat.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>CADASTRO ESTAÇÕES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
           
      

        
      <li class="active"><a href="adm.php"></a></li>

                </ul>
            </div>

        </div>
    </div>

    <div class="container">

  <ul class="nav nav-tabs">
    
   
 


  </ul>
  <br>
  <form class="form" role="form" name="seachform" method="post" action="enviar_estacao2.php " >


  <div class="form-group">

       <label for="email">ESTACAO:</label>
       <input type="text" class="form-control" id="estacao" name="estacao2"  p required >
    </div>
   

    <div class="form-group">

       <label for="email">CABO:</label>
       <input type="text" class="form-control" id="estacao" name="estacao"  p required >
    </div>
    
    <div class="form-group">

        <label for="email">ROTA:</label>
        <input type="text" class="form-control"  name="rota"   required >
        </div>
 
      <div class="form-group">
      

    <div class="form-group">

        <label for="email">DISTANCIA:</label>
        <input type="text" class="form-control"  name="distancia"   required >
    </div>

    <div class="form-group">

        <label for="email">TIPO / CAPACIDADE CABO:</label>
        <input type="text" class="form-control"  name="tipo"   required >
    </div>

    <div class="form-group">

        <label for="email">CONECTOR TIPO:</label>
        <input type="text" class="form-control"  name="conect_tipo"   required >
    </div>
 
      <div class="form-group">
   



<label for="email" >QUANTIDADE DE PORTAS:</label> 
  <select  class="form-control" id="portas" name="portas" ">
   
            <option value="12">12</option>
           <option value="36">36</option>
           <option value="72">72</option>
              <option value="144">144</option>
       
        
    </select>
    </div>

      <div class="form-group">



<label for="email" >ANUF:</label> 
  <select  class="form-control" id="anuf" name="anuf" ">
   
           
           <option value="41">41</option>
           <option value="42">42</option>
              <option value="43">43</option>
              <option value="44">44</option>
              <option value="45">45</option>
              <option value="46">46</option>
       
        
    </select>
    </div>

    <strong><span>BEO</span></strong>
    <fieldseT style='border: 2px #cccccc solid; padding:13px'>
    
    <div class="form-group">

        <label for="email">FL:</label>
        <input type="text" class="form-control"  name="fl_beo"   required >
    </div>

    <div class="form-group">

        <label for="email">BT:</label>
        <input type="text" class="form-control"  name="bt_beo"   required >
    </div>
    <div class="form-group">

<label for="email">POS:</label>
<input type="text" class="form-control"  name="pos_beo"   required >
</div>
<div class="form-group">

<label for="email">SBT:</label>
<input type="text" class="form-control"  name="sbt_beo"   required >
</div>
    </fieldset><br><br>


    <strong><span>DIO</span></strong>
    <fieldseT style='border: 2px #cccccc solid; padding:13px'>
    
    <div class="form-group">

        <label for="email">FL:</label>
        <input type="text" class="form-control"  name="fl_dio"   required >
    </div>

    <div class="form-group">

        <label for="email">BT:</label>
        <input type="text" class="form-control"  name="bt_dio"   required >
    </div>
    <div class="form-group">

<label for="email">POS:</label>
<input type="text" class="form-control"  name="pos_dio"   required >
</div>
<div class="form-group">

<label for="email">SBT:</label>
<input type="text" class="form-control"  name="sbt_dio"   required >
</div>
    </fieldset><br><br>

    <strong><span>DGO</span></strong>
    <fieldseT style='border: 2px #cccccc solid; padding:13px'>
    
    <div class="form-group">

        <label for="email">FL:</label>
        <input type="text" class="form-control"  name="fl_dgo"   required >
    </div>

    <div class="form-group">

        <label for="email">BT:</label>
        <input type="text" class="form-control"  name="bt_dgo"   required >
    </div>
    <div class="form-group">

<label for="email">POS:</label>
<input type="text" class="form-control"  name="pos_dgo"   required >
</div>

<div class="form-group">

<label for="email">MOD:</label>
<input type="text" class="form-control"  name="mod_dgo"   required >
</div>
<div class="form-group">

<label for="email">SBT:</label>
<input type="text" class="form-control"  name="sbt_dgo"   required >
</div>
    </fieldset><br><br>
      <div class="form-group">
        <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>
    </div>
     
      

    



         
  





   
    
   
 
   

 
   
 



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  
</div>




</body>
</html>

