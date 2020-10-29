<div class="c100" id="rechercher">
<input type="text" name="rechercher" placehoder="rechercher un livre">
</div>
<div class="row">
<?php
    
    include "includes/database.php";
            
            try{
                
                $sth = $conn->prepare("select distinct genre FROM livre");
                $sth->execute();
                $listeGenres= $sth->fetchAll(PDO::FETCH_ASSOC);

            foreach ($listeGenres as $grow => $genre){

                echo $genre["genre"];
                echo "<div class='container'> <div class='row'>";
            
                
                /*Sélectionne les valeurs dans les colonnes prenom et mail de la table
                 *users pour chaque entrée de la table*/
                $sth = $conn->prepare("SELECT livre.titre,livre.id_livre,livre.genre,livre.logolivre,auteur.nom as auteur_name,editeur.nom as editeur_name 
                
                FROM livre,publier,auteur,editeur 
                
                WHERE publier.id_livre=livre.id_livre AND publier.id_auteur=auteur.id_auteur AND publier.id_editeur=editeur.id_editeur AND livre.genre=:genre");
                $parent=array("genre"=>$genre["genre"]);
                $sth->execute($parent);
                
                /*Retourne un tableau associatif pour chaque entrée de notre table
                 *avec le nom des colonnes sélectionnées en clefs*/
                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                
				foreach ($result as $row => $livre) {
                
        echo '<div class="col-4">';
        echo '<div class="card livrecard border border-primary">';
        echo '<img class="card-img-top" src="uploads/'.$livre['logolivre'].'" alt="Card image cap">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">'.$livre['titre'].'</h5>';
        echo '<p class="card-text">'.$livre['genre'].'</p>';
        echo '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
        echo'<a class="btn btn-success" href="?id='.$livre['id_livre'].'&page=livre">Détails</a>'; 
        echo '</div>';
        echo '</div>';
    echo '</div>';
        }
        echo '</div>';
        echo '</div>';     
                }
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
 ?>   
    <!--<div class="col-4">
        <div class="card livrecard border border-primary">
            <img class="card-img-top" ssrc="img/image1.png" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Titre Livre</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>  
    </div>

    <div class="col-4">
        <div class="card livrecard border border-primary">
            <img class="card-img-top" ssrc="img/image3.png" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Titre Livre</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div> -->


        
    