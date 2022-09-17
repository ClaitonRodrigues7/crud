<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Alteração de Cadastro</title>
  </head>
  <body>
      <div class="container">
          <div class="rol">
             <?php       
            
             if($_POST){
                 include 'conexao.php'; 

                 $id = $_POST['id'];
                 $nome = $_POST['nome'];

                 $email = $_POST['email'];
              
                 $data_nasc = $_POST['data_nasc'];
             
                  $sql = "UPDATE cliente SET nome = '$nome', email = '$email', data_nasc = '$data_nasc' WHERE id_cliente = $id";
                 if($conn->query($sql)){
                 echo "<p> $nome registro alterado com sucesso!</p>";
                 
                 }
                 else {
                 echo "Erro " . $sql . '' .$conn->connect_error; 
                 }
             
                 $conn -> close();
             }
             ?>
          <a href="index.php"><button type="button" class="btn btn-primary">Voltar</button></a>
</div>
</div>
</body>
</html>