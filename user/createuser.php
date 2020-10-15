<?php
include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";
        
        if(@$_POST['prenom']!="")
        {
         
   
        

            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $passw = $_POST['password'];
            $age = $_POST['age'];
            $sexe = $_POST['sexe'];
            $pays = $_POST['pays'];
            
            
            //On établit la connexion
            try{
            
                 // Insertion dans la table client
                    
                $sql = "INSERT INTO user (prenom,email,password,age,sexe,pays,role)
                VALUES(:prenom,:email,:password,:age,:sexe,:pays,:role)";
                
                $sth = $conn->prepare( $sql);               
              
                $params=[
                ':prenom' => $prenom,
                ':email' => $email,               
                ':password' => $passw,
                ':age' => $age,
                ':sexe' => $sexe,
                ':pays' => $pays,
                ':role' => "admin"];
                
        
                $sth->execute($params);
                $id_user=$conn->lastInsertId();
                
             
                
                
                header('Location:../admin/starter.php?page=userlist');
                
                echo "Entrée ajoutée dans la table";
            
            }
        
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        
            
        }
        
        ?>
 