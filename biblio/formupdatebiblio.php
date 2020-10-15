<?php
include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";
$id_bibliotheque=$_GET['id'];
	


$sql = "select *  FROM bibliotheque WHERE id_bibliotheque='$id_bibliotheque'";
$sth = $conn->prepare($sql);

$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);

/*$id_user=$result['id_user'];*/
$nom=$result['nom'];
$adresse=$result['adresse'];
$telephone=$result['telephone'];
?>

		  	      <link rel="stylesheet" href="style.css">

<h1>Formulaire HTML</h1>
        
        <form action="<?php echo $path['updatebiblio'];?>" method="post">
		
		<input type="hidden" id="id_bibliotheque" name="id_bibliotheque" value="<?php echo $id_bibliotheque;?>">
		
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo $nom;?>">
            </div>
            <div class="c100">
                <label for="adresse">Adresse : </label>
                <input type="text" id="adresse" name="adresse" value="<?php echo $adresse;?>">
            </div>
            <div class="c100">
                <label for="telephone">Téléphone : </label>
                <input type="text" id="telephone" name="telephone" value="<?php echo $telephone;?>">
            </div>
				             
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>