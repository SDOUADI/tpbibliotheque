<?php

include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";


  if(@$_POST['id_user']!=""){
		$id_user = $_POST['id_user'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$age=$_POST['age'];
		$sexe=$_POST['sexe'];
        $pays=$_POST['pays'];
		
try{

		
		$sql = "UPDATE user set prenom=:prenom, email=:email, password=:password, age=:age, sexe=:sexe, pays=:pays, role=:admin WHERE id_user=$id_user";

		$params=array(
						':prenom' => $prenom,

						':email' => $email,

						':password' => $password,
            
                        ':age' => $age,
            
                        ':sexe' => $sexe,
            
                        ':pays' => $pays,
            
                        ':admin' => "admin"
            
                        );
    
		$sth = $conn->prepare($sql);
		$sth->execute($params);

		

		$sth->execute($params);
		header('Location:../admin/starter.php?page=userlist');      

	}
	catch(PDOException $e){

	echo "Erreur : " . $e->getMessage();

	}
  }
 ?>