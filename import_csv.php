<?php

 $state_csv = false;

 class csv extends mysqli
 {

 function __construct()
 {

    parent::__construct("localhost","root","","dgo");
    if($this->connect_error)
    {

          echo "Conexão falhou". $this->connect_error;

    }


 }
function import($file)
{
   
   $file = fopen($file, 'r');
   echo "<pre> <strong>LOGS:</strong><br></pre>";  
   while ($row = fgetcsv($file))
   {
      
      $value = "'". implode("';'", $row). "'";

      
      
      $value2 = preg_replace("';'","','", $value);


      $value2 =  utf8_decode($value2);

      





      
      
      $q = "insert into anuf (id,anuf,cabo,qtd_fo,estacao,estacao_b,porta,enlace,ocupacao,obs) values(". $value2 .")";
      if ( $this->query($q) ) 
      {

              $this->state_csv = true;


      } 

      else
      {

                $this->state_csv = false;

      }
             
    if ( $this->state_csv)
    {

           echo "<pre style='color:green;'>$value OK<br></pre>";

    }

    else
    {

      echo "<pre style='color:red;'>$value ERRO<br></pre>";

    }

   }

}
}

?>