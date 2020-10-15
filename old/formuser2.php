<?php
include"../security/secure.php";
include "includes/database.php";
include"../includes/define.php";

if(@$_GET['id']!=""){
			$id_user=$_GET['id'];
				
			

			$sql = "select *  FROM user WHERE id_user=$id_user";
			$sth = $conn->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$prenom=$result['prenom'];
			$email=$result['email'];
			$password=$result['password'];
            $age=$result['age'];
            $sexe=$result['sexe'];
            $pays=$result['pays'];
            $role=$result['role'];
		
				 $action=$path['updateuser'];
				 $titreForm=" MODIFIER UTILISATEUR ";
		}
		else {
			$action=$path['createuser'];
			$titreForm=" AJOUT UTILISATEUR ";
			
		}
?>

        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="css/style.css">


        <h1><?php echo $titreForm;?></h1>
        
        <div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
        
        <input type="hidden" id="id_user" name="id_user" value="<?php echo @$id_user;?>">
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo @$prenom;?>">
            </div>
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="email" value="<?php echo @$email;?>">
            </div>
            <div class="c100">
                <label for="password">Mot de passe : </label>
                <input type="password" id="password" name="password" value="<?php echo @$password;?>">
            </div>
            <div class="c100">
                <label for="password">Confirmer le mot de passe : </label>
                <input type="password" id="confpassword" name="confpassword" "<?php echo @$confpassword;?>">
            </div>
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age" "<?php echo @$age;?>">
            </div>
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme" "<?php echo @$sexe;?>">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme" "<?php echo @$sexe;?>">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre" "<?php echo @$sexe;?>">
                <label for="autre">Autre</label>
            </div>
            <div class="c100">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays" "<?php echo @$pays;?>">
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
</div>
            
        
      