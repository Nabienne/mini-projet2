<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROMOS</title>
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

<div>
<?php
   $apprenant=fopen('listapprenants.txt','r');
   $recup="";
   while(!feof($apprenant))
   {
   $row=fgets($apprenant);
    $col=explode(";",$row);

    if($col[6]=="promo1")
    {
        $lign="";
    }
   else
   { 
    $lign=$row;
   }
   $recup.=$lign;

 }
 fclose($apprenant);
 $affiche=fopen('promo1.txt','w+' );//création du nouveau fichier promo1.txt
 fwrite($affiche,$recup);
 fclose($affiche);



 $list1=fopen('promo1.txt','r');
 echo'<table border=1px class="table table-dark" >';
 echo '<tr>
 <th>INE</th>
 <th>Nom</th>
 <th>Prénom</th>
 <th>Date de naissance</th>
 <th>Numero</th>
 <th>Mail</th>
 <th>Promotion2</th>
 <th>Statut</th>
 <th>Décision administrative</th>
 
      </tr>';
      while($row=trim(fgets($list1)))
      {
       $col=explode(";",$row);
       echo '<tr>';
       for($i=0;$i<count($col);$i++)
       {
         if($col[8]!="exclus(e)")
         {echo "<td>".$col[$i]."</td>";}
         else{$row="";}
       }
        echo '</tr>';
      }
     
       echo '</table>';
       fclose($list1);

    ?>
    </div>

    <div>
    <?php
     $chohorte2=fopen('listapprenants.txt','r');
   $ligne="";
   while(!feof($chohorte2))
   {
   $row=fgets($chohorte2);
    $col=explode(";",$row);

    if($col[6]=="promo2" )
    {
        $lign="";
    }
   else
   { 
    $lign=$row;
   }
   $ligne.=$lign;

 }
 fclose($cohorte2);
 $newfichier=fopen('promo2.txt','w+');//création du nouveau fichier promo2.txt
 fwrite($newfichier,$ligne);
 fclose($newfichier);



 $list2=fopen('promo2.txt','r');
 echo'<table border=1px class="table table-dark" >';
 echo '<tr>
 <th>INE</th>
 <th>Nom</th>
 <th>Prénom</th>
 <th>Date de naissance</th>
 <th>Numero</th>
 <th>Mail</th>
 <th>Promotion1</th>
 <th>Statut</th>
 <th>Décision administrative</th>

      </tr>';
      while($row=trim(fgets($list2)))
      {
       $col=explode(";",$row);
       echo '<tr>';
       for($i=0;$i<count($col);$i++)
       {
        if($col[8]!="exclus(e)")
        {echo "<td>".$col[$i]."</td>";}
        else{$row="";}
       }
        echo '</tr>';
      }
     
       echo '</table>';
       fclose($list2);
      ?>
      </div>

      

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
</body>
</html>