<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
}



ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
  font-family: Arial;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: darkred;
  color: white;
}

li a:hover:not(.active) {
  background-color: darkred;
  color: white;
}

</style>
</head>
<body>

<ul>
  <li><a href="Rubrica.html" href="#Contatti">Contatti</a></li>
  <li><a href="#Preferiti">Preferiti</a></li>
  <li><a class="active" href="Aggiungi.php">Aggiungi contatto</a></li>
  
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
 
  <h1>Nuovo Contatto</h1>
  <form action= "" method="POST">
    Nome:<input type="text" name="nome"><br><br>
    Cognome:<input type="text" name="cognome"><br><br>
     Numero:<input type="text" name="numero"><br><br>
    <input type="submit" name="INVIO">
</form>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rubrica";

$Numero = $_POST['numero'];
$Nome = $_POST['nome'];
$Cognome = $_POST['cognome'];
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO contatti ( Nome , Cognome, Numero)
VALUES ('{$Nome}','{$Cognome}','{$Numero}')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else $conn->error;
?>


</body>
</html>
