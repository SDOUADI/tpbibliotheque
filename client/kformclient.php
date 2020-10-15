<?php

include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";
			
		if(@$_GET['id']!=""){
			$id_client=$_GET['id'];
				
			

			$sql = "select *  FROM client WHERE id_client=$id_client";
			$sth = $conn->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$nom=$result['nom'];
			$prenom=$result['prenom'];
			$telephone=$result['telephone'];
		
				 $action=$path['updateclient'];
				 $titreForm=" MODIFIER CLIENT ";
		}
		else {
			$action=$path['createclient'];
			$titreForm=" AJOUT CLIENT ";
			
		}
			
			 
		

?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="css/style.css">

<h1><?php echo $titreForm;?></h1>
        
		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
		
		<input type="hidden" id="id_client" name="id_client" value="<?php echo @$id_client;?>">
		 <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo @$nom;?>">
            </div>			
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo @$prenom;?>">
            </div>
            <div class="c100">
                <label for="telephone">Téléphone : </label>
                <input type="text" id="telephone" name="telephone" value="<?php echo @$telephone;?> "/>
            </div>
						
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
		</div>