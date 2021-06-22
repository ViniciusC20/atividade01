<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
border : 1px solid black ;
}
  </style>
  </head>
  <body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1atividade";
try {

  $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Id, Nome, Disciplina, nota1, nota2 FROM atividade01";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Id</th><th>Nome</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Id"]."</td><td>".$row["Nome"]."</td><td>".$row["Disciplina"]."</td><td>".$row["nota1"]."</td><td>".$row["nota2"]."<td></td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>