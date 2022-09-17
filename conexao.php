<!DOCTYPE html>
<html>
<head>
</head>
<body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




<?php 


   $server ="localhost";
   $user ="root";
   $pass ="";
   $bd ="empresa";

   $conn = mysqli_connect($server, $user, $pass, $bd);

   if (!$conn) {
      // echo "Não conectou com o Banco de Dados";
   }else{
   // echo "Usuario Cadastrado!!";
   }

   function mensagem ($texto, $tipo){
      echo "<div class='alert alert-success' role='alert'>
         $texto
         </div>";
   }

   function mostra_data($data) {
      $d = explode('-', $data);
      $escreve = $d[2] ."/" .$d[1] ."/" .$d[0];
      return $escreve;

   }


    

 ?>

  



 </body>
</html>