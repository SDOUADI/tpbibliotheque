<?php
$servname = "localhost"; $dbname = "bd_sonia_biblio"; $dbuser = "root"; $dbpass = "";
$id_livre=$_GET['id'];
	
$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "select *  FROM livre WHERE id_livre='$id_livre'";
$sth = $dbco->prepare($sql);

$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);

/*$id_user=$result['id_user'];*/
$titre=$result['titre'];
$genre=$result['genre'];
$logolivre=$result['logolivre'];
/*$id_bibliotheque
$auteur
$editeur
$date_publication*/
?>

		  	      <link rel="stylesheet" href="style.css">

<h1>Formulaire HTML</h1>
        
        <form action="kupdatelivre.php" method="post">
		
		<input type="hidden" id="id_livre" name="id_livre" value="<?php echo $id_livre;?>">
		
            <div class="c100">
                <label for="titre">Titre : </label>
                <input type="text" id="titre" name="titre" value="<?php echo $titre;?>">
            </div>
            <div class="c100">
                <label for="genre">Genre : </label>
                <input type="text" id="genre" name="genre" value="<?php echo $genre;?>">
            </div>
            <div class="c100">
                <label for="logolivre">Logolivre : </label>
                <input type="file" id="logolivre" name="logolivre" value="<?php echo $telephone;?>">
            </div>
				             
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>