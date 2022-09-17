<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col">
              <h1>Cadastro</h1>
              <form method="POST" action="cadastro_script.php.php">
                <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                   <input type="text" class="form-control" name="nome" placeholder="Digite Aqui">
                 </div>

                  <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Email</label>
                   <input type="email" class="form-control" name="email" placeholder="Digite Aqui" >
                 </div>

                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Data de Nascimento</label>
                   <input type="date" class="form-control" name="data_nasc"  >
                 </div>

                  <div class="mb-3">
                   <input type="submit" class="btn btn-success"  >
                 </div>
                 <a href="index.php" class="btn btn-info">Pagina Inicial</a>



              </form>


            
          </div>
        </div>
      </div>

  

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>