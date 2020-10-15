<?php
include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";
       
                $id_editeur=$_GET['id'];

            try{
                $sql = "DELETE FROM editeur WHERE id_editeur=$id_editeur";
                $sth = $conn->prepare($sql);
                $sth->execute();
                
                header('Location:../admin/starter.php?page=editeurlist');
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }



?>