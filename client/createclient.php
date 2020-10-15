<?php
include "../security/secure.php";
include "../includes/functions.php";
include "../includes/database.php";

        
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
            $prenom = $_POST['prenom'];
            $telephone = $_POST['telephone'];
            
            //On établit la connexion
            try{
            
                 // Insertion dans la table client
                    
                $sql = "INSERT INTO client (nom,prenom,telephone)
                VALUES(:nom,:prenom,:telephone)";
                
                $sth = $conn->prepare( $sql);               
              
                $params=[
                ':nom' => $nom,
                ':prenom' => $prenom,               
                ':telephone' => $telephone];
                
        
                $sth->execute($params);
                $id_client=$conn->lastInsertId();
                
                // Insertion dans la table publier
                 /*$sql = "INSERT INTO publier (id_editeur,id_auteur,id_livre,date_publication)
                VALUES(:id_editeur,:id_auteur,:id_livre,:date_publication)";
                
                $sth = $conn->prepare( $sql);               
              
                $params=[
                ':id_editeur' => $id_editeur,
                ':id_auteur' => $id_auteur,               
                ':id_livre' => $id_livre,
                ':date_publication' => $date];*/
                
        
                /*$sth->execute($params);*/
                
                
                
                header('Location:../admin/starter.php?page=clientlist');
                
                echo "Entrée ajoutée dans la table";
            
            }
        
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        
            
        }
        
        ?>
 