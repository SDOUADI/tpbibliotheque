<?php
include "../includes/database.php";

@$email=$_GET["email"];
//instruction pour vérif si $email existe das table user
$sql = "SELECT email FROM user WHERE email='$email'";
			

    $sth = $conn->prepare($sql);
   $sth->execute();
    $resultat = $sth->fetch(PDO::FETCH_ASSOC);
    if($sth->rowCount()>0){
        echo "KO";
    }
    else
    {
        echo "OK";
    }

    





?>