<!DOCTYPE html>

<?php
			$servname = "localhost"; $dbname = "bd_sonia_biblio"; $dbuser = "root"; $dbpass = "";
			
			$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);
			$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "select id_bibliotheque, nom FROM bibliotheque";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$option1 .="<option value='".$val['id_bibliotheque']."'>".$val['nom']."</option>";
			 }

            $servname = "localhost"; $dbname = "bd_sonia_biblio"; $dbuser = "root"; $dbpass = "";
			
			$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);
			$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "select id_editeur, nom FROM editeur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$option2 .="<option value='".$val['id_editeur']."'>".$val['nom']."</option>";
			 }

            $servname = "localhost"; $dbname = "bd_sonia_biblio"; $dbuser = "root"; $dbpass = "";
			
			$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);
			$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "select id_auteur, nom, prenom FROM auteur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$option3 .="<option value='".$val['id_auteur']."'>".$val['prenom'] ." " .$val['nom']."</option>";
			 }
            
?>

<html>

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="formuser.css" />
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    </head>

    <body>
        <h1>Formulaire HTML</h1>
        
        <form action="createlivre.php" method="post" enctype="multipart/form-data">
            <div class="c100">
                <label for="titre">Titre : </label>
                <input type="text" id="titre" name="titre">
            </div>
            <div class="c100">
                <label for="genre">Genre : </label>
                <input type="text" id="genre" name="genre">
            </div>
            <div class="c100">
                <label for="id_editeur">Editeur : </label>
                <select id="id_editeur" name="id_editeur">  <!-- liste déroulante des éditeurs disponibles-->
                <option value="">--Selectionnez l'éditeur</option>
                <?php echo $option2; 
                ?>
				</select>
            </div>
            <div class="c100">
                <label for="id_auteur">Auteur : </label>
                <select id="id_auteur" name="id_auteur">  <!-- liste déroulante des auteurs disponibles-->
                <option value="">--Selectionnez l'auteur</option>
                <?php echo $option3; 
                ?>
				</select>
            </div>
            <div class="c100">
                <label for="logolivre">Logolivre : </label>
                <input type="file" id="logolivre" name="logolivre">
            </div>
            
            <div class="c100">
                <label for="id_bibliotheque">Bibliothèque :</label>
                <select id="id_bibliotheque" name="id_bibliotheque">  <!-- liste déroulante des bibliothèques disponibles-->
                    <option value="">--Selectionnez la bibliotheque</option>
                       <?php echo $option1; 
                        ?>
				</select>
			</div>
            
            <div class="c100">
                <label for="date">Date publication : </label>
                <input type="date" id="date" name="date">
            </div>
            
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
            
            
            
    
        </form>
        
    </body>
    
    
</html>