<?php
include"../security/secure.php";

$servname = "localhost"; $dbname = "bd_sonia_biblio"; $dbuser = "root"; $dbpass = "";
$id_user=$_GET['id'];
	
$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "select *  FROM User WHERE id_user='$id_user'";
$sth = $dbco->prepare($sql);

$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);

/*$id_user=$result['id_user'];*/
$prenom=$result['prenom'];
$mail=$result['email'];
$passw=$result['password'];
$sexe=$result['sexe'];
$age=$result['age'];
$pays=$result['pays'];
?>

		  	      <link rel="stylesheet" href="style.css">

<h1>Formulaire HTML</h1>
        
        <form action="updateuser.php" method="post">
		
		<input type="hidden" id="id_user" name="id_user" value="<?php echo $id_user;?>">
		
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo $prenom;?>">
            </div>
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="mail" value="<?php echo $mail;?>">
            </div>
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age" value="<?php echo $age;?>">
            </div>
			 
			
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme" <?php if($sexe=="femme")echo "checked";?>>
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme" <?php if($sexe=="homme")echo "checked";?>>
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre" <?php if($sexe=="autre")echo "checked";?>>
                <label for="autre">Autre</label>
            </div>
            <div class="c100">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays">
				 <option value="<?php echo $pays?>"><?php echo $pays?></option>
				 
                    <optgroup label="Europe">
                        <option value="france">France</option>
                        <option value="belgique">Belgique</option>
                        <option value="suisse">Suisse</option>
                    </optgroup>
                    <optgroup label="Afrique">
                        <option value="algerie">Algérie</option>
                        <option value="tunisie">Tunisie</option>
                        <option value="maroc">Maroc</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="benin">Bénin</option>
                        <option value="togo">Togo</option>
                    </optgroup>
                    <optgroup label="Amerique">
                        <option value="canada">Canada</option>
                    </optgroup>
                </select>
            </div>
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>