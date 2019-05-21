<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Ajouter user</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="listapprenants.php">Listes des apprenants <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listpromo.php">Lister les promotions</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Modifications
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ajoutpromo.php">Ajouter une promotion</a>
          <a class="dropdown-item" href="inscription.php">inscrire un étudiant</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="modifpromo.php">Modifier une promotion</a>
          <a class="dropdown-item" href="modifappr.php">Modifier les données d'un apprenants</a>
          <a class="dropdown-item" href="statut.php">Statut</a>
          <a class="dropdown-item" href="decision.php">Décision administrative</a>
        </div>
      </li>
    </ul>
  </div>
</nav>



<center>
<div class="container-fluid">
<div class="jumbotron">
  <h1>Inscrir un apprenant</h1>
</div>
</div>
</center>

<center>
<form class="needs-validation" novalidate method="post" action="">
<table>
<div class="form-row">
<div class="col-md-4 mb-3">
		<tr>
		<td> <em>Nom</em></td>
         <td> <input type="texte" name="nom" placeholder="nom" required="required"></td>
		</tr>
    <div class="valid-tooltip">
        Looks good!
      </div>
    <div class="col-md-4 mb-3">
    <td><em>INE</em> </td>
	<td><input type="texte" name="id"  placeholder="identifiant" required="required">
		</tr>
    <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
    <tr>
<td><em> Prénom</em> </td>
<td><input type="text" name="prenom" placeholder="prenom" required></td>
		</tr>
    <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
    <tr>
	<td><em>Telephone</em></td>
	<td><input type="number" name="tel" placeholder="Tel" required></td>
		</tr>
    <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
  	<tr>
	<td><em>Mail</em>  </td>
	<td><input type="mail" name="mail" placeholder="e-mail" required></td>
	</tr>
  <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  <div class="col-md-4 mb-3">
		<tr>
		<td> <em>promotion</em></td>
		<td><select id="text"  name="promo" required="required">
        <option selected>promo1</option>
        <option>promo2</option>
        <option>promo3</option>
        <option>promo4</option>
        <option>promo5</option>
        <option>promo6</option>
        <option>promo7</option>
        <option>promo8</option>
        <option>promo9</option>
        <option>promo10</option>
        <option>promo11</option>
        <option>promo12</option>
        <option>promo13</option>
        <option>promo14</option>
        <option>promo15</option>
        <option>promo16</option>
        <option>promo17</option>
        <option>promo18</option>
        <option>promo19</option>
        <option>promo20</option>
      </select></td>
	</tr>
  <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  <div class="col-md-4 mb-3">
  <tr>
		<td> <em>Statut</em></td>
		<td><select id="text"  name="statut" required>
        <option selected>Présent(e)</option>
        <option>Absent(e)</option>
        <option>Exclus(e)</option>
      </select></td>
	</tr>
  <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
		<tr>
		<td> <em>Date de naissance</em></td>
		<td><input type="date"  name="date" required></td>
	</tr>
  <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
		
<div>
<tr>
<td>
<button class="btn btn-primary" type="submit" name="submi" >Inscrire</button>
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
if(isset($_POST['submi']))
{
$users=fopen('listapprenants.txt','a+');
$mail=$_POST['mail'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$id=$_POST['id'];
$tel=$_POST['tel'];
$statut=$_POST['statut'];
$promo=$_POST['promo'];
$date=$_POST['date'];
$trouve=false;
while ($ligne=fgets($users))
 {
  
$col=explode(";",$ligne);
if($id==$col[0] ||  $tel==$col[4] || $date==$col[3] || $mail==$col[5])
{
  $trouve=true;
  echo "Ces parametres existent deja !!!!!!!"; 
}

}
if($trouve==false)
{
  fwrite($users,"\n".$id.";".$nom.";".$prenom.";".$date.";".$tel.";".$mail.";".$promo.";".$statut.";");

}
fclose($users);


$listusers=fopen('listapprenants.txt','r');
echo'<table border=1px class="table table-dark" >';
 echo '<tr>
 <th>INE</th>
 <th>Nom</th>
 <th>Prénom</th>
 <th>Date de naissance</th>
 <th>Numero</th>
 <th>Mail</th>
 <th>Promotion</th>
 <th>Statut</th>
 <th>Décision administrative</th>

</tr>';

while (!feof($listusers)) {
$ligne=fgets($listusers);
$col=explode(";",$ligne);
echo '<tr>';
for($i=0;$i<count($col);$i++){
  echo "<td>".$col[$i]."</td>";
}
 echo '</tr>';

}

echo '</table>';
fclose($listusers);
}

?>
</div>
</center>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
