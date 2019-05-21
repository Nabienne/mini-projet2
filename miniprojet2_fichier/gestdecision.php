<?php

$mail=$_GET['mail'];
$lign="";
$decision=fopen("listapprenants.txt", "r");
while (!feof($decision)) {
    $ligne=fgets($decision);
    $col=explode(";", $ligne);
    if ($mail==$col[5]) {
        if ($col[8]=='exclus(e)') {
            
            $col[8]='non exclus(e)';
            
        }
        else {
            
            $col[8]='exclus(e)';
        
        }
        $recupere=$col[0].";".$col[1].";".$col[2].";".$col[3].";".$col[4].";".$col[5].";".$col[6].";".$col[7].";".$col[8].";"."\n";
     }
      else{
            $recupere=$ligne; 
    }
    $lign.=$recupere;
    }
fclose($decision);
$decision=fopen('listapprenants.txt', "w+"); 
fputs($decision,trim($lign));
fclose($decision);
header("location:decision.php");

?>