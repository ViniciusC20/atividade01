<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primeira Atividade</title>
</head>
<body>
      <h2> Primeira Atividade </h2>
      <a href = "CRUD/create.php" >Inserir informações na Tabela </a> <br>
      <a href = "CRUD/read.php" > Vizualizar tabela </a>
<hr>
      <h2> Segunda atividade:</h2>
      <h2>C<a href="CRUD/create.php">riate</a></h2>
      <h2>R<a href="CRUD/read.php">ead</a></h2>
      <h2>U<a href="CRUD/update.php">pdate</a></h2>
      <h2>D<a href="CRUD/delete.php">elete</a></h2>
      </head>

      main

    <form name ="Form_cad" action="CRUD/create.php" method="POST">
        <input class="form-control form-control-lg" type="text" name="Id" placeholder="Id" aria-label=".form-control-lg example">
<input class="form-control" type="text" name="nome" placeholder="Nome" aria-label="default input example"><br>
<input class="form-control form-control-sm" type="text" name="Disciplina" placeholder="Disciplina" aria-label=".form-control-sm example">
<input class="form-control form-control-lg" type="text" name="nota1" placeholder="Nota 1" aria-label=".form-control-lg example"><br>
<input class="form-control" type="text" name="nota2" placeholder="Nota 2" aria-label="default input example"><br><br>
      
        <button type="submit" class="btn btn-primary">Alterar/Cadastrar</button>
      </form>
      <hr>
</body >
</html >