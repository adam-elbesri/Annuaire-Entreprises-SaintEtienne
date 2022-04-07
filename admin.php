<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin</title>
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
  h2{
    padding:10px;
    margin-top:10px;
  }
  h1{
    text-align:center;
    margin:auto;
    dispaly:inline-block;
  }
  
</style>
     <a href="index.php">
      <button>Partie USER</button>
    </a>
    <h1>Partie ADMIN</h1>

    <h2> Veuillez importer des données selon votre choix</h2>
<div>
    <h4>Importation par fichier csv : </h4>
    <form action="upload.php" method="post" enctype="multipart/form-data">
  Selectionner un CSV :
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Lancer importation" name="submit">
</form>
</div>

<div>
    <h4>Importation par API : </h4>

   <a href="fetch.php">
      <button>Importation par API</button> </a>
</div>


<div>

      <h4>Importation par Linkedin Scrapping  : </h4>

    Entrez le lien Linkedin d'une entreprise que vous voulez importer : 
    <form action="result.php" method="GET" name="">
	<table>
		<tr>
			<td><input type="text" name="search" placeholder="Saisir le lien" /></td>
			<td><input type="submit" name="" value="Importer" /></td>
		</tr>
	</table>
    </form>
</div>
    
</body>
</html>