<?php
include "../security/secure.php";
include "../includes/functions.php";
include "../includes/database.php";

        
        if(@$_POST['titre']!="")
        {
         
        /*$servername = 'localhost'; //connexion en local
            $username = 'root'; // par défaut
            $password = ''; // rien par défaut
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';*/
        

        
            $titre = $_POST['titre'];
            $genre = $_POST['genre'];
            $id_auteur = $_POST['id_auteur'];
            $id_editeur = $_POST['id_editeur'];
            $date = $_POST['date_publication'];
            $id_bibliotheque=$_POST["id_bibliotheque"];
			$logolivre=uploadfile("logolivre",true);
            
            //On établit la connexion
            try{
            
                 // Insertion dans la table livre
                    
                $sql = "INSERT INTO livre (titre,genre,logolivre,id_bibliotheque)
                VALUES(:titre,:genre,:logolivre,:id_bibliotheque)";
                
                $sth = $conn->prepare( $sql);               
              
                $params=[
                ':titre' => $titre,
                ':genre' => $genre,               
                ':id_bibliotheque' => $id_bibliotheque,
                ':logolivre' => $logolivre];
                
        
                $sth->execute($params);
                $id_livre=$conn->lastInsertId();
                
                // Insertion dans la table publier
                 $sql = "INSERT INTO publier (id_editeur,id_auteur,id_livre,date_publication)
                VALUES(:id_editeur,:id_auteur,:id_livre,:date_publication)";
                
                $sth = $conn->prepare( $sql);               
              
                $params=[
                ':id_editeur' => $id_editeur,
                ':id_auteur' => $id_auteur,               
                ':id_livre' => $id_livre,
                ':date_publication' => $date];
                
        
                $sth->execute($params);
                
                
                
                header('Location:../admin/starter.php?page=livrelist');
                
                echo "Entrée ajoutée dans la table";
            
            }
        
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        
            
        }
        
        ?>
 