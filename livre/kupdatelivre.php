<?php

include "../security/secure.php";
include "../includes/database.php";

include_once "../includes/functions.php";  /*inclus le php contenant les fonctions */

  if(@$_POST['id_livre']!=""){
		$id_livre = $_POST['id_livre'];
		$id_bibliotheque=$_POST['id_bibliotheque'];
		$titre=$_POST['titre'];
		$genre=$_POST['genre'];
		$logolivre=uploadfile('logolivre',true);//$_POST['logo'];
		$id_auteur=$_POST['id_auteur'];
		$id_editeur=$_POST['id_editeur'];
		$date_publication=$_POST['date_publication'];
		
try{

		
		$sql = "UPDATE livre set titre=:titre, id_bibliotheque=:id_bibliotheque, genre=:genre, logolivre=:logolivre WHERE id_livre=$id_livre";

		$params=array(':id_bibliotheque' => $id_bibliotheque,
						':titre' => $titre,

						':genre' => $genre,

						':logolivre' => $logolivre         

						);
		$sth = $conn->prepare($sql);
		$sth->execute($params);

		$params=array(':id_auteur'=>$id_auteur,
							':id_editeur'=>$id_editeur,
							':date_publication'=>$date_publication         

											);
		$sql = "UPDATE publier set  id_auteur=:id_auteur, id_editeur=:id_editeur, date_publication=:date_publication WHERE id_livre=$id_livre";

		$sth = $conn->prepare($sql);

		$sth->execute($params);
		header('Location:../admin/starter.php?page=livrelist');      

	}
	catch(PDOException $e){

	echo "Erreur : " . $e->getMessage();

	}
  }
 ?>