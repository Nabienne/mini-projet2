<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Ajouter user</title>
</head>
<body>


<center>
<div class="container-fluid">
<div class="jumbotron">
  <h1>Ajouter des utilisateurs</h1>
</div>
</div>
</center>

 
<center>
<form class="needs-validation" novalidate method="POST" action="ajoutpromo.php">
<table>
<div class="form-row">
<div class="col-md-4 mb-3">
		<tr>
		<td> <em>Nom de la promotion</em></td>
         <td> <input type="texte" name="nom" placeholder="nompromo" required></td>
		</tr>
    <div class="col-md-4 mb-3">
    <td><em>Code promo</em> </td>
	<td><input type="text" name="id"  placeholder="identifiant" requiredtd>
		</tr>
   
    </div>
    <div class="col-md-4 mb-3">
    <tr>
<td><em> Mois et années</em> </td>
<td><input type="month" name="mois" placeholder="mois" required></td>
		</tr>

    </div>


  <div class="col-md-4 mb-3">
		<tr>
		<td> <em>Nombre d'étudiants</em></td>
		<td><input type="number"  name="nbre" required/></td>
      
	</tr>
    </div>
 
<div>
<tr>
<td>
<button class="btn btn-primary" type="submit" name="ajout" >ajouter</button>
</td>
</tr>
</div>
</div>

	</table>
  </form>
</center>

<center>

<div>
<?php
if(isset($_POST['ajout']))
{
  $nom=$_POST['nom'];
  $code=$_POST['id'];
  $periode=$_POST['mois'];
  $nbr=$post['nbre'];
  $ajout=fopen('promos.txt','a+');
$trouve=false;
while ($ligne=fgets($users))
 {
  
$col=explode(";",$ligne);
if($code==$col[0] || $periode==$col[2])
{
  $trouve=true;
  echo "Cette promotion existe deja !!!!!!!"; 
}

}
if($trouve==false)
{
  fwrite($ajout,"\n".";".$code.";".$nom.";".$periode.";".$nbr.";");
  }
fclose($ajout);
$promo=fopen('promos.txt','r');
echo '<table border=5px solid>';
echo '<tr>
<th>ID</th>
<th>Cohorte</th>
<th>MOIS-Années</th>
<th>Nombre apprenants</th>
     </tr>';

while($row=trim(fgets($promo)))
{
$col=explode(";",$row);
echo '<tr>';
for($i=0;$i<count($col);$i++)
{
  echo "<td>".$col[$i]."</td>";
}
 echo '</tr>';
}

echo '</table>';
fclose($promo);
}

?>
</div>
</center>












<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
