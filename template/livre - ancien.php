<?php

include "includes/database.php";
include "includes/define.php";

if(@$_GET['id']!=""){
			$id_livre=$_GET['id'];
				
			

			$sql = "SELECT livre.titre,livre.id_livre,livre.genre,livre.logolivre,auteur.nom as auteur_name,editeur.nom as editeur_name,publier.date_publication
                
            FROM livre,publier,auteur,editeur 
                
            WHERE publier.id_livre=livre.id_livre AND publier.id_auteur=auteur.id_auteur AND publier.id_editeur=editeur.id_editeur and livre.id_livre=$id_livre";
			$sth = $conn->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$id_bibliotheque=$result['id_bibliotheque'];
			$titre=$result['titre'];
			$genre=$result['genre'];
			$logolivre=$result['logolivre'];
            $editeur=$result['editeur_name'];
            $auteur=$result['auteur_name'];
            $date_publication=$result['date_publication'];
		
				 $action=$path['updatelivre'];
				 $titreForm=" MODIFIER LIVRE ";
    }

   ?>
<div class="container-fluid">
    <div class="row">
        
            <div class="col-5">
                <img class="card-img-left" src="img/contesdelafolie.jpg" alt="Card image cap">  
            </div>  
            
            <div class="col-7">
                <div class="card livrecard">
                <h5 class="livre-titre">Contes de la folie ordinaire</h5>
                <p class="livre-desc">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="livre-auteur">Charles Buckowski</p> 
                <p class="livre-editeur">Gallimard</p>
                <p class="livre-datepublication">2 Décembre 1979</p>
                <a class=""><button  type="button" class="btn btn-success">Emprunter</button></a>  
                </div>
            </div>
    </div>
</div>
 

