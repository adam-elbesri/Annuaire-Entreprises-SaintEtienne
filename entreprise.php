<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreprise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

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
  <a href="admin.php">
      <button>Partie ADMIN</button>
    </a>
 


  <h1>Page spécifique à une entreprise</h1>

<?php
$id = $_POST['id_director'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname="wiki";


  $conn = new mysqli($servername, $username, $password,$dbname);
$conn->set_charset("utf8");

$sql = "SELECT * FROM wikibase where id = $id ";

$result = $conn->query($sql);





if ($result->num_rows > 0) {
     
     


  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo "<div><h2>".$row["nom"]."</h2>";

    echo " 
        <table>
            <tr>
                <th>Siren</th>
                <td>".$row["siren"]."</td>
            </tr>
            <tr>
                <th>Siret</th>
                <td>".$row["siret"]."</td>
            </tr>
            <tr>
                <th>Nic</th>
                <td>".$row["nic"]."</td>
            </tr>
             <tr>
                <th>Catégorie</th>
                <td>".$row["categorie"]."</td>
            </tr>
            <tr>
                <th>Activité</th>
                <td>".$row["activite"]."</td>
            </tr>
             <tr>
                <th>Forme Juridique</th>
                <td>".$row["forme_juridique"]."</td>
            </tr>
            <tr>
                <th>Fonction Dirigeant</th>
                <td>".$row["fonction_dirigeant"]."</td>
            </tr>
            <tr>
                <th>Effectif</th>
                <td>".$row["effectif"]."</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>".$row["numeroVoie"]." ".$row["typeVoie"]." ".$row["nomVoie"]." ".$row["codePostal"]." </td>
            </tr>
            <tr>
                <th>Date de création</th>
                <td>".$row["date_creation"]."</td>
            </tr>
        </table>";

        echo "<a href=".$row["url"].">
      <button>Encore plus d'informations</button>
    </a> </div>";
  }
} 



?>

</body>
</html>