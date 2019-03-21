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
  <li><a class="active" href="Contatti.php">Contatti</a></li>
  <li><a href="#Preferiti">Preferiti</a></li>
  <li><a href="Aggiungi.php">Aggiungi contatto</a></li>


  
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rubrica";


$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT  Nome, Cognome, Numero FROM contatti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["Nome"]. " Cognome: " . $row["Cognome"].  " Numero " . $row["Numero"]. "<br>";
    }
}
$conn->close();
?>

</div>

</body>
</html>