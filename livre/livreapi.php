<?php

include "../includes/functions.php";
include "../includes/database.php";

$titre = securisation(@$_GET['titre']);
 $sql = "SELECT * FROM livre WHERE titre LIKE '%".$titre."%'";

    $sth = $conn->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $livreList=array();
    $json="[";
    $i=0;
    foreach ($result as $row => $livre) {
      if($i>0)$json .=",";
       $json .="{";
        $livreList[]=$livre;
        $json .='"id_livre":"'.$livre['id_livre'].'"';
        $json .=',"titre":"'.$livre['titre'].'"';
       $json .="}";
      $i++;
     }
     $json .="]";


  echo $json;






//phpinfo();

//include "../includes/functions.php";
//include "../includes/database.php";

//$titre = securisation(@$_GET['titre']);
//$sql = "SELECT * FROM livre WHERE titre LIKE '%".$titre."%'";

    //$sth = $conn->prepare($sql);
    //$sth->execute();
    //$result = $sth->fetchAll(PDO::FETCH_ASSOC);
    //$livreList=array();
    //foreach ($result as $row => $livre) {
        //$livreList[]=$livre;
    //}
    //$data=json_encode($result);
    //print_r($data);
        ?>
 
 