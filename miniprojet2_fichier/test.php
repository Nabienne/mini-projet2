<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
<div class="form-row">
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email"  name="mail" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label>INE</label>
      <input type="number"  name="id" placeholder="identifiant" required>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label>Nom</label>
    <input type="text"  nam="nom" placeholder="nom" required>
  </div>
  <div class="form-group col-md-6">
    <label>Prénom </label>
    <input type="text"  name="prenom" placeholder="prenom" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Tel</label>
      <input type="number"  name="tel" placeholder="telephone" required>
    </div>
    <div class="form-group col-md-4">
      <label>Statut</label>
      <select id="text"  name="statut" required>
        <option selected>Présent(e)</option>
        <option>Absent(e)</option>
      </select>
      <div class="form-group col-md-4">
      <label>Promotion</label>
      <select id="text"  name="promo" required>
        <option selected>promo1</option>
        <option>promo2</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label>Date de naissance</label>
      <input type="date"  name="date" required>
    </div>
  </div>
  
  <button type="submit" name="envoie">Inscription</button>
</form>
<?php

if(isset($_POST['envoie']))
$inscri=fopen('listapprenants.txt','a+');
{
   $mail=$_POST['mail'];
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $id=$_POST['id'];
   $tel=$_POST['tel'];
   $statut=$_POST['statut'];
   $promo=$_POST['promo'];
   $date=$_POST['date'];
   $inscription=false;
   
    while($row=fgets($inscri))
    {
        $col=explode(";",$row);
        if($id==$col[0] ||  $tel==$col[4] || $date==$col[3] || $mail==$col[5])
            {
                $inscription=true;
                echo"Ce paramètre existe déja!";
            }
            if($inscription=false){
              $recup="\n".$id.";".$nom.";".$prenom.";".$date.";".$tel.";".$mail.";".$statut.";".$promo.";";
              fwrite($inscri,$recup);
             }
    }

   
    fclose($inscri);
}
?>
</body>
</html>