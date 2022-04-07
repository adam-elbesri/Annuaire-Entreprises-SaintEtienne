<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <a href="admin.php">
      <button>Partie ADMIN</button>
    </a>
  <h1>Partie USER</h1>
  <div>
  <form action="result.php" method="GET" name="">
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


$sql = "SELECT * FROM wikibase where nom LIKE '%".$search."%' or  categorie LIKE '%".$search."%' or  fonction_dirigeant LIKE '%".$search."%' or  activite LIKE '%".$search."%'  ";
$sql1 = "SELECT * FROM linkedin where entreprise LIKE '%".$search."%' or  poste LIKE '%".$search."%'  ";

$result = $conn->query($sql);
$result1 = $conn->query($sql1);


$compteur=$result->num_rows+$result1->num_rows;
 echo " <div> <h3> Il existe ".$compteur." Entitée(s) en rapport avec votre requête !</h3> <br>";


if ($result->num_rows > 0) {
     
      echo "  <h4> Entreprise(s) :</h4>";


  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row["id"];
    echo " <div></strong>" . $row["nom"]. " <form method='POST' action='entreprise.php'>
    <input type='hidden' name='id_director' value=$id />

    <input type='submit' value='En savoir plus' />
</form> </div>";
  }
  echo "</div>";
} 

if ($result1->num_rows > 0) {
   
      echo "<h4> Offre d'emploi(s) :</h4>";

  // output data of each row
  while($row = $result1->fetch_assoc()) {
     $id=$row["id"];
    echo " <div> </strong>" . $row["poste"]. " <form method='POST' action='offre.php'>
    <input type='hidden' name='id_director' value=$id />

    <input type='submit' value='En savoir plus' />
</form> </div>";
  }
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