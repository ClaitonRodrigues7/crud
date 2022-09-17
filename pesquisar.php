<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>

    <?php

  
        $pesquisa = $_POST['busca'] ??'';          

      include "conexao.php";

      $sql = "SELECT * FROM cliente WHERE nome LIKE '%$pesquisa%'"; 


      $dados = mysqli_query($conn, $sql);
      ?>
      

      






      <div class="container">
        <div class="row">
          <div class="col">

            <h1>Pesquisar</h1>
              
              <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" action="pesquisar.php" method="POST">
      <input class="form-control me-2" type="search" placeholder="Digite Aqui" aria-label="Search" name="busca" autofocus>
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>

      <table class="table table-hover">

        <thead>
          <tr>     
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Funções</th>
           
          </tr>

        </thead>
        
        <tbody>
          <?php

      while ($linha = mysqli_fetch_assoc($dados)) {
        $id_cliente = $linha['id_cliente'];
        $nome = $linha['nome'];
        $email = $linha['email'];
        $data_nasc = $linha['data_nasc'];
        $data_nasc = mostra_data($data_nasc);

          echo  "<tr>
              <th scope='row'>$nome</th>
              <td>$email</td>
              <td>$data_nasc</td>
              <td width=150px>
                    <a href='cadastro_edit.php.php?id=$id_cliente' class='btn btn-success btn-sm'>Editar</a>
                    <a  class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#confirma'
                    onclick=" .'"' ."pegar_dados($id_cliente, '$nome')" .'"' .">Excluir</a>
              </td>
                                                
            </tr>";        

      }

      ?>

        </tbody>

      </table>


        <a href="index.php"  class="btn btn-primary">Voltar para o inicio</a>
          </div>
        </div>
      </div>

<div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="excluir_script.php.php" method="POST">
        <p>Deseja realmente excluir <b id="nome_pessoa">Nome do pessoa</b>?</p>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <input type="hidden" name="id" id="id_cliente" value="">
        <input type="submit" class="btn btn-danger" value="Sim">
      </form>
      </div>
    </div>
  </div>
</div>

    
 

      }

      <script type="text/javascript">
      function pegar_dados(id, nome){
        document.getElementById('nome_pessoa').innerHTML = nome;
        document.getElementById('id_cliente').value = id;


      }

    </script>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>