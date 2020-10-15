<?php
include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";
        
        if(@$_POST['nom']!="")
        {
        @$prenom=$_POST["nom"];
    
        
        @$mail=$_POST["adresse"];
        
        
        @$password=$_POST["telephone"];
        
        
        
        
        
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
            $telephone = $_POST['telephone'];
            
            //On établit la connexion
            try{
        
            //$sql = "INSERT INTO user(prenom,email,password,age,sexe,pays,role)
           // VALUES('$prenom','$email','$passw','$age','$sexe','$pays','admin')";
             
                $sql = "INSERT INTO bibliotheque (nom,adresse,telephone)
                VALUES(:nom,:adresse,:telephone)";
                //$sql = $conn
                $sth = $conn->prepare( $sql);
                
               // echo "<br>".$sql;
               // $conn->exec($sql);
               // echo '<br>Entrée ajoutée dans la table';
                
                /*$params=array(
                ':prenom' => $prenom,
                ':email' => $email,
                ':passw' => $passw,
                ':age' => $age,
                ':sexe' => $sexe,
                ':pays' => $pays,
                ':admin'=> "admin");*/
                
                $params=[
                ':nom' => $nom,
                ':adresse' => $adresse,
                ':telephone' => $telephone];
                
        
                $sth->execute($params);
                
                echo "Entrée ajoutée dans la table";
                header("location:../admin/starter.php?page=bibliolist");
            
            }
        
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        
            
        }
        
        ?>
 