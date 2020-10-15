<?php

include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";
			
		if(@$_GET['id']!=""){
			$id_auteur=$_GET['id'];
				
			

			$sql = "select *  FROM auteur WHERE id_auteur=$id_auteur";
			$sth = $conn->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$nom=$result['nom'];
			$prenom=$result['prenom'];
			$nationalite=$result['nationalite'];
		
				 $action=$path['updateauteur'];
				 $titreForm=" MODIFIER AUTEUR ";
		}
		else {
			$action=$path['createauteur'];
			$titreForm=" AJOUT AUTEUR ";
			
		}
			/* REQUETE LISTE DE TOUTES LES BIBLIOTHEQUES  
			
			
			$sql = "select id_bibliotheque, nom FROM bibliotheque";
			$sth = $conn->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC); /* on récupère toute la liste dans la base de donnée*/
			 /*foreach ($result as $biblio => $val){
				 @$optionb .="<option value='".$val['id_bibliotheque']."'>".$val['nom']."</option>";
				 //equivalent à $option= "<option value='1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>"
			 }


			REQUETE LISTE DE TOUS LES AUTEURS 
			
			
			$sql = "select id_auteur, nom as auteur_nom, prenom FROM auteur ";
			$sth = $conn->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $auteur => $val){
				 @$optiona .="<option value='".$val['id_auteur']."'>".$val['auteur_nom']." ".$val['prenom']."</option>";
				
			 }
			 
			 
			 REQUETE LISTE DE TOUS LES EDITEURS 
			 
			 
			$sql = "select id_editeur, nom as editeur_nom FROM editeur";
			$sth = $conn->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $auteur => $val){
				 @$optione .="<option value='".$val['id_editeur']."'>".$val['editeur_nom']."</option>";
				
			 }*/
			 
		

?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="css/style.css">

<h1><?php echo $titreForm;?></h1>
        
		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
		
		<input type="hidden" id="id_auteur" name="id_auteur" value="<?php echo @$id_auteur;?>">
		 <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo @$nom;?>">
            </div>			
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo @$prenom;?>">
            </div>
            <div class="c100">
                <label for="nationalite">Nationalité : </label>
                <input type="text" id="nationalite" name="nationalite" value="<?php echo @$nationalite;?> "/>
            </div>
						
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
		</div>