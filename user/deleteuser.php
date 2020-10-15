<?php

include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";

           $id_user=$_GET['id'];

            try{
                    
                $sql = "DELETE FROM user WHERE id_user=$id_user";
                $sth = $conn->prepare($sql);
                $sth->execute();
                
                header('Location:../admin/starter.php?page=userlist');
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }



?>