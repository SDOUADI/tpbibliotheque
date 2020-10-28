<?php


include "includes/database.php";
include "includes/define.php";

			
		if(@$_GET['id']!=""){
			$id_livre=$_GET['id'];
				
			

            $sql = "select * FROM livre WHERE id_livre=$id_livre";
           
			$sth = $conn->prepare($sql);
           
			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$action="emprunter/traitementemprunter.php";
			$titre=$result['titre'];
			$genre=$result['genre'];
			$logo=$result['logolivre'];
	 
				
		}
			

?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="css/style.css">

<h1></h1>
        
		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
		
		<input type="hidden" id="id_livre" name="id_livre" value="<?php echo @$id_livre;?>">
		 <div class="c100">
                <label for="titre">Titre : </label>
                <?php echo @$titre;?>
            </div>			
            <div class="c100">
                <label for="genre">Genre : </label>
                <?php echo @$genre;?>
            </div>
            <div class="c100">
                <label for="logolivre">Logo : </label>
                <img class='tabimg' src="uploads/<?php echo @$logo;?>" width="150" height=120/>
            </div>

			<div class="c100">
                <label for="nom">Nom : </label>
                <input name="nom">
            </div>
			
			<div class="c100">
                <label for="prenom">Prénom : </label>
                <input name="prenom">
            </div>
			
			<div class="c100">
                <label for="telephone">Téléphone : </label>
                <input name="telephone">
            </div>
			
			
						
            <div class="c100" id="validate">
                <input class="btn" type="submit" value="Valider">
            </div>
        </form>
		</div>