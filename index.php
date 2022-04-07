<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Accueil</title>
</head>
<body>
  <a href="admin.php">
      <button>Partie ADMIN</button>
    </a>


<h1>Partie USER</h1>

<h2>Veuillez interroger notre base locale </h2>
  <form action="result.php" method="GET" name="">
	<table>
		<tr>
			<td><input type="text" name="search" placeholder="Saisir votre recherche" /></td>
			<td><input type="submit" name="" value="Chercher" /></td>
		</tr>
	</table>
   
</form>
<div>

<a href="result2.php?search=aaaaaaa">
      <button>Base large</button>
    </a>
</div>


    
   
  


</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="wiki";


  $conn = new mysqli($servername, $username, $password,$dbname);



$sql = "SELECT * FROM entreprise";
$result = $conn->query($sql);
/*
if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id_entreprise"]. " - Name: " . $row["nom"]. " " . $row["activite"]. "<br>";
  }
} else {
  echo "0 results";
}*/
?>
<style>
  form{
    display:block;
    text-align:center;
    margin:auto;
    padding:10px;
  }
  h2{
    text-align:center;
    margin-top:20px;
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