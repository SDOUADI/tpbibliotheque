<?php
include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";
			
		if(@$_GET['id']!=""){
			$id_editeur=$_GET['id'];
				
			

			$sql = "select *  FROM editeur WHERE id_editeur=$id_editeur";
			$sth = $conn->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$nom=$result['nom'];
			$adresse=$result['adresse'];
		
				 $action=$path['updateediteur'];
				 $titreForm=" MODIFIER EDITEUR ";
		}
		else {
			$action=$path['createediteur'];
			$titreForm=" AJOUT EDITEUR ";
			
		}
			

?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="css/style.css">

<h1><?php echo $titreForm;?></h1>
        
		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
		
		<input type="hidden" id="id_editeur" name="id_editeur" value="<?php echo @$id_editeur;?>">
		 <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo @$nom;?>">
            </div>			
            <div class="c100">
                <label for="adresse">Adresse : </label>
                <input type="text" id="adresse" name="adresse" value="<?php echo @$adresse;?>">
            </div>
						
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
		</div>