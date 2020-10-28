<?php

include "../includes/database.php";
include "../includes/functions.php";

$id_livre=$_POST['id_livre'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $telephone=$_POST['telephone'];
  $dateemprunt = date("Y-m-d H:i:s");
				$paramsClient=array(':nom' => $nom,
				':prenom' => $prenom,
				 ':telephone'=>$telephone);
				 
				$sql = "INSERT INTO Client(nom,prenom,telephone) VALUE (:nom,:prenom,:telephone)";
				$anyname= $conn->prepare( $sql);	
				
                                    
				$anyname->execute($paramsClient);
				$id_client=$conn->lastInsertId();
				
				$paramsEmprunt=array(':id_client' => $id_client,
				':date_emprunt' => $dateemprunt,
				 ':id_livre'=>$id_livre);
				 
				$sql = "INSERT INTO emprunter(date_emprunt,id_client,id_livre) VALUE (:date_emprunt,:id_client,:id_livre)";
				$anyname= $conn->prepare( $sql);	
				
                                    
				$anyname->execute($paramsEmprunt);
				header("Location:../homepagebookshop.php");

    ?>

