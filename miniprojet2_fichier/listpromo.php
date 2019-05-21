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
<?php
    
    echo'<table border=1px class="table table-dark" >';
    echo '<tr>
    <th>ID</th>
    <th>Cohorte</th>
    <th>MOIS-Années</th>
    <th>Nombre apprenants</th>
         </tr>';
   $promo=fopen("promos.txt","r");
   while(!feof($promo))
   {
    $row=trim(fgets($promo));
    $col=explode(";",$row);
    $list=fopen("listapprenants.txt","r");
    $effectif=0;
    while(!feof($list))
    {
      $ligne=trim(fgets($list));
      $colonne=explode(";",$ligne);

      if( $col[1]== $colonne[6])
      {
    
        $effectif++;
      }
    }
    fclose($list);
    echo'<tr>';
    echo '<td>'.$col[0].'</td>';
    echo '<td>'.$col[1].' </td>';
    echo '<td>'.$col[2].' </td>';
    echo '<td>'.$effectif.' </td>';
    echo'</tr>';
   }
    echo '</table>';
    fclose($promo);
    ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>