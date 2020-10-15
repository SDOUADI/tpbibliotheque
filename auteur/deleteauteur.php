<?php


include "../includes/database.php";
       
                $id_auteur=$_GET['id'];

            try{
                $sql = "DELETE FROM auteur WHERE id_auteur=$id_auteur";
                $sth = $conn->prepare($sql);
                $sth->execute();
                
                header('Location:../admin/starter.php?page=auteurlist');
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }



?>