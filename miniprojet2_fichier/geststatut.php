<?php

$id=$_GET['id'];
$nouveau="";
$gestion=fopen("listapprenants.txt", "r");
while (!feof($gestion)) {
    $ligne=fgets($gestion);
    $col=explode(";", $ligne);
    if ($id==$col[0]) {
        if ($col[7]=='Présent(e)') {

            $col[7]='absent(e)';
            
        }
        else {
            
            $col[7]='Présent(e)';
        
        }
        $recup=$col[0].";".$col[1].";".$col[2].";".$col[3].";".$col[4].";".$col[5].";".$col[6].";".$col[7].";";
     }
      else{
            $recup=$ligne; 
    }
    $nouveau.=$recup;
    }
fclose($gestion);
$gestion=fopen('listapprenants.txt', "w+"); 
fputs($gestion,trim($nouveau));
fclose($gestion);
header("location:statut.php");

?>
