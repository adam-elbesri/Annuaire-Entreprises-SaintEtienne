<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <a href="admin.php">
      <button>Partie ADMIN</button>
    </a>
  <h1>Partie USER</h1>
  <h1> BASE LARGE </h1>
  <div>
  <form action="result2.php" method="GET" name="">
	<table>
		<tr>
			<td><input type="text" name="search" placeholder="Saisir votre recherche" /></td>
			<td><input type="submit" name="" value="Nouvelle recherche" /></td>
		</tr>
	</table>
</form>
</div>


  

<?php
$search=$_GET['search'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="wiki";


  $conn = new mysqli($servername, $username, $password,$dbname);
  $conn->set_charset("utf8");


$sql = "SELECT * FROM fichier_27856_509967_01_zip where nom LIKE '%".$search."%' or  forme_juridique LIKE '%".$search."%' or  fonction_dirigeant LIKE '%".$search."%' or  activite LIKE '%".$search."%'  ";


$result = $conn->query($sql);


 echo " <div> <h3> Il existe ".$result->num_rows." Entitée(s) en rapport avec votre requête !</h3> <br>";


if ($result->num_rows > 0) {
     
      echo "  <h4> Entreprise(s) :</h4>";


  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row["id"];
    echo " <div></strong>" . $row["nom"]. " <form method='POST' action='entreprise2.php'>
    <input type='hidden' name='id_director' value=$id />

    <input type='submit' value='En savoir plus' />
</form> </div>";
  }
  echo "</div>";
} 



?>
<style>
  form{
    display:inline-block;
  }
  div{
    margin:10px;
    padding:10px;
  }
  h1{
    text-align:center;
    margin:auto;
    dispaly:inline-block;
  }
  
</style>

</body>
</html>