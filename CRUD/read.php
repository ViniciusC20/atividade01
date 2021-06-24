<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read</title>
</head>
<body>
 
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Nome</th><th>Disciplina</th><th>nota1</th><th>nota2</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "sql202.epizy.com";
$username = "epiz_28967693";
$password = "NnX5picn7fb";
$dbname = "epiz_28967693_atv";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM atividade01");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

<form name ="Form_exc" action="delete.php" method="GET">
<input class="form-control" type="text" name="Id" placeholder="Deletar" aria-label="default input example">
<button type="submit" class="btn btn-primary">Delete</button>
</form>

<form name ="Form_edit" action="update.php" method="GET">
<button type="submit" class="btn btn-primary">Update</button>
</form>

<br> <br>
      <a href = "http://localhost/atividade01/index.php">voltar </a> <br>
</body>
</html>