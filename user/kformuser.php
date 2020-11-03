<?php
include "../security/secure.php";

include "../includes/database.php";
include "../includes/define.php";

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
                <input type="email" id="email" name="email" value="<?php echo @$email;?>"><span id='error_email' style="color:red"> </span><br/>
            </div>
            <div class="c100">
                <label for="password">Mot de passe : </label>
                <input type="password" id="password" name="password" value="<?php echo @$password;?>"><span id='error_password' style="color:red"> </span>
            </div>
            <div class="c100">
                <label for="password">Confirmer le mot de passe : </label>
                <input type="password" id="repassword" name="repassword" "<?php echo @$repassword;?>">
            </div>
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age" "<?php echo @$age;?>">
            </div>
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme" <?php if(@$sexe=="femme") echo "checked";?>>
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme" <?php if(@$sexe=="homme") echo "checked";?>>
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre" <?php if(@$sexe=="autre") echo "checked";?>>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>        
<script>
 
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

$(document).ready(function(){

 $("#email").on("blur",function(){
	 
	 var $email= $("#email").val();
	 
		if(validateEmail($email)){
			
		$.ajax({

     url : 'traitement.php',
       type : 'GET',
	   data:'email='+$("#email").val(),
	   
       dataType : 'text',
       success : function(resultat, statut){
			//alert(resultat);
			if(resultat=="OK"){
				//Mettre la bordure en vert
				$("#email").css('color','green');
				$('#error_email').html("");
			}
			else if(resultat=="KO"){
				//Mettre la bordure en rouge
					$("#email").css('color','red');
					$('#error_email').html("Email already exist");
			}
       },

       error : function(resultat, statut, erreur){
			alert(resultat);
       },

       complete : function(resultat, statut){

       }


    });
		}
		else {
			$('#email').focus();
			$('#error_email').html("Email non Valide");
		}
	 
 });
 $("#password").on("input",function(){
	 
	 var $password= $("#password").val();
	 
	
        		
		$.ajax({

     url : 'validatepassword.php',
       type : 'GET',
	   data:'password='+$("#password").val(),
	   
       dataType : 'text',
       success : function(resultat, statut){
			//alert(resultat);
			if(resultat=="valid"){
				//Mettre la bordure en vert
				$("#password").css('color','green');
				$('#error_password').html("");
			}
			else if(resultat!="valid"){
				//Mettre la bordure en rouge
					$("#password").css('color','red');
					$('#error_password').html("Password not valid");
			}
       },

       error : function(resultat, statut, erreur){
			alert(resultat);
       },

       complete : function(resultat, statut){

       }
	   
	   });
	   
	});

    $("#repassword").on("input",function(){
	 
     var $password= $("#password").val();
     var $repassword= $("#repassword").val();
      
             if($password==$repassword){
                 //Mettre la bordure en vert
                 $("#repassword").css('color','green');
                 $('#error_repassword').html("");
             }
             else if($password!==$repassword){
                 //Mettre la bordure en rouge
                     $("#repassword").css('color','red');
                     $('#error_repassword').html("Password not valid");
             }
        
        
        });
        
     });      	

	   





/* $("#formulaire").submit(function(e){ // On sélectionne le formulaire par son identifiant
    e.preventDefault(); 

    var donnees = $(this).serialize(); // On créer une variable content le formulaire sérialisé
     //alert(data);
	// alert('ok');
    $.ajax({

     url : 'traitement.php',
       type : 'POST',
	   data:donnees,
	   
       dataType : 'html',
       success : function(code_html, statut){
			alert("Succees");
       },

       error : function(resultat, statut, erreur){
			alert(resultat);
       },

       complete : function(resultat, statut){

       }


    }); 

	
});*/

</script>      
      