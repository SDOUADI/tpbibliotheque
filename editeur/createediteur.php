<?php
include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";

        
        if(@$_POST['nom']!="")
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
        

        
            $nom = $_POST['nom'];
            $adresse = $_POST['adresse'];
            
            //On établit la connexion
            try{
            
                 // Insertion dans la table client
                    
                $sql = "INSERT INTO editeur (nom,adresse)
                VALUES(:nom,:adresse)";
                
                $sth = $conn->prepare( $sql);               
              
                $params=[
                ':nom' => $nom,
                ':adresse' => $adresse];
                
        
                $sth->execute($params);
                $id_editeur=$conn->lastInsertId();
                
                // Insertion dans la table publier
                 /*$sql = "INSERT INTO publier (id_editeur,id_auteur,id_livre,date_publication)
                VALUES(:id_editeur,:id_auteur,:id_livre,:date_publication)";
                
                $sth = $conn->prepare( $sql);               
              
                $params=[
                ':id_editeur' => $id_editeur,
                ':id_auteur' => $id_auteur,               
                ':id_livre' => $id_livre,
                ':date_publication' => $date];*/
                
        
                $sth->execute($params);
                
                
                
                header('Location:../admin/starter.php?page=editeurlist');
                
                echo "Entrée ajoutée dans la table";
            
            }
        
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        
            
        }
        
        ?>
 