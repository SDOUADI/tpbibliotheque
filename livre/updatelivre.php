<?php
include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";
  if(@$_POST['id_livre']!=""){


			
			$id_livre = $_POST['id_livre'];
			$titre=$_POST['titre'];
			$genre=$_POST['genre'];
            $logolivre=$_POST['logolivre'];
			
try{
	

$sql = "UPDATE livre set titre=:titre,genre=:genre,logolivre=:logolivre WHERE id_livre=:id_livre";
$sth = $conn->prepare($sql);
$params=array(
                                
                                    ':titre' => $titre,
                                    ':genre' => $genre,
                                    ':logolivre' => $logolivre,
                                    ':id_livre' => $id_livre,
									);

$sth->execute($params);
  header('Location:livrelist.php');      
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
 
 }
?>