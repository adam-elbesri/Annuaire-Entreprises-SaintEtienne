<?php
include_once('simple_html_dom.php');

$html=file_get_html('offre.html');
$html2=$html->find('ul',6);
//echo $html2;

$servername = "localhost";
$username = "root";
$password = "";
$dbname="wiki";
$compteur=0;


  




 
foreach($html2->find('li') as $e) {
  $compteur++;

   echo ' <strong>Titre de loffre :</strong>' . $e->find('h3',0)->plaintext . '<br>';
     echo '<strong>Entreprise : </strong>'. $e->find('h4',0)->plaintext . '<br>';
     echo '<strong>Lien de loffre : </strong> <a href="'. $e->find('a',0)->href . '"> lien </a><br>';
     echo "<br> <br>"; 
    $conn = new mysqli($servername, $username, $password,$dbname);
      if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $titre=$e->find('h3',0)->plaintext;
    $entreprise=$e->find('h4',0)->plaintext;
    $lien=$e->find('a',0)->href;
  $entreprise=str_replace("'","",$entreprise);
   $titre=str_replace("'","",$titre);



     $sql = "INSERT into linkedin (poste,entreprise,lien_offre)   values ( '$titre','$entreprise','$lien')  ";
    
    if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}
echo " voici le compteur".$compteur;
    

?>
