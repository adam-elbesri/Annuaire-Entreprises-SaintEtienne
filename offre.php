<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offre</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <a href="admin.php">
      <button>Partie ADMIN</button>
    </a>
 
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

  <h1>Page spécifique à une offre d'emploi</h1>

<?php
$id = $_POST['id_director'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname="wiki";


  $conn = new mysqli($servername, $username, $password,$dbname);
$conn->set_charset("utf8");

$sql = "SELECT * FROM linkedin where id = $id ";

$result = $conn->query($sql);





if ($result->num_rows > 0) {
     
     


  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div><h2>".$row["poste"]."</h2>";

    echo " 
        <table>
            <tr>
                <th>Poste</th>
                <td>".$row["poste"]."</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>".$row["entreprise"]."</td>
            </tr>
           
            
          
        </table>";

        echo "<a href=".$row["lien_offre"].">
      <button>Voir sur Linkedin </button>
    </a></div>";
  }
} 



?>

</body>
</html>