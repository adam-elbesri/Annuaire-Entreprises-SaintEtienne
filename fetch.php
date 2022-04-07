
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FETCH SIREt</title>
</head>
<body>
    <h1>Fetch par numéro de siret</h1>
    <label for="site-search">Search the site:</label>
<input type="search" id="search" >

<button onclick="api()">Search</button>
   
    <pre id="res" >

    </pre>
</body>



</html>

<script>
    console.log("test");
    var obj="adam";
    var url="https://api.insee.fr/entreprises/sirene/V3/siret/"
    var text;
    function api(){
        var num=document.getElementById("search").value;
        console.log(num);
        url=url+num;
        adam(url);
    }
    //adam();
    //adam2();

//https://api.insee.fr/entreprises/sirene/V3/siret?q=codeCommuneEtablissement%3A42218%20AND%20denominationUniteLegale%3A*%20AND%20activitePrincipaleRegistreMetiersEtablissement%3A*%20AND%20categorieEntreprise%3A*%20AND%20numeroVoieEtablissement%3A*%20AND%20trancheEffectifsEtablissement%3A*%20AND%20etatAdministratifUniteLegale%20%3AA&nombre=1000
//&debut=1000

async function adam(lien){
// recupère tous les établissements de l'INSEE basé a st etienne
    fetch(lien, {
  method: "GET",
  headers: {"Accept": "application/json",
"Authorization": "Bearer e85be054-828a-35fc-9336-ea3afba227a3"}
})
.then(response => response.json()) 
.then(json => {
    console.log(json);
    obj=json.etablissement;
    console.log("le obj est");
    console.log(obj);
      delete obj.adresse2Etablissement;  
      delete obj.periodesEtablissement;
       var newobj=JSON.stringify(obj, undefined, 2);
  

    
    document.getElementById("res").innerHTML=newobj;
    if(obj.adresseEtablissement.codeCommuneEtablissement != '42218')
    {
        alert("Cette entreprise n'est pas à ST ETIENNE !!!!");
    }else{
        console.log("ST ETIENNE");
    }
    
})

.catch(err => console.log(err));
//var adam=obj.etablissements;
}


function download(){
    var dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(obj));
var dlAnchorElem = document.getElementById('downloadAnchorElem');
dlAnchorElem.setAttribute("href",     dataStr     );
dlAnchorElem.setAttribute("download", "part20.json");
dlAnchorElem.click();
}

</script>

