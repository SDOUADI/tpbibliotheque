<html>
<head>
<title> Ma première page PHP</title>
</head>
    
<body>


<?php // synthaxe d'ouverture du code PHP
    
    $a=13; //variable commence par $
    $b=4;
    $c=10;
    
    echo "<h1>$a x $b = ".$a*$b."</h1>"; // affichera 3 x 4 = 12
    echo "<h1>$a x \"$b\" = ".$a*$b."</h1>"; // si je veux que les guillemets apparaissent je dois positionner un anti slash devant
    
    $Sonia="Hi Sonia";    
    echo $Sonia; // echo permet d'afficher la variable $Sonia 
    
    $prenom = "Sonia";
    $nom = "DOUADI";
    $age = '40';
    
    echo "Je m'appelle $prenom et j'ai $age ans <br>";
    echo "Je m'appelle {$prenom} et j'ai {$age} ans <br>";
    echo 'Je m\'appelle $prenom et j\'ai $age ans <br>';
    
    $prez = "Je suis $prenom $nom, j'ai $age ans <br>";
    $prez2 = "Je suis {$prenom} {$nom}, j'ai {$age} ans <br>";
    $prez3 = 'Je suis $prenom $nom, j\'ai $age ans';
    
    echo $prez;
    echo $prez2;
    echo $prez3."<br/>";
    
    /*for($i=0;$i<3;$i++){ //boucle incrémentation qui affichera 0 1 2

        echo $i."<br/>";
    }
    
    $i=0; // autre exemple de boucle
    while($i<3){
        echo $i."<br/>";
        $i++;
    }
    
    if ($a<$b && $a<$c)
    {
        echo "A est le plus petit sa valeur est $a";  
        
    }
    else if($a<$b && $a>$c)
        
    {
        echo "C est le plus petit sa valeur est $c";
        echo "l'ordre est C<A<B ($c<$a<$b)";
    }
    
    else if($a>$b && $a<$c)
    {
        echo "B est le plus petit sa valeur est $b";
        echo "l'ordre est B<A<C ($b<$a<$c)";
        
    }
    
    else if($a>$b && $a>$c)
    {
        if($b>$c){
            

        echo "C est le plus petit sa valeur est $c";
        echo "l'ordre est C<B<A ($c<$b<$a)";
             }
        
        else{
        
        echo "B est le plus petit sa valeur est $b";
        echo "l'ordre est B<C<A ($b<$c<$a)";
        }
    }*/
    
    /*for($i=0;$i<3;$i++){ // autre boucle plus élaborée à tester
	   
	   echo $i."<br/>";
   }
   
   $i=0;
   while($i<3){
	    echo $i."<br/>";
		$i++;
   }
   
   if(($a<$b) && ($a<$c))
   {
	
		echo " A est le plus petit sa valeur est  $a";
		if($b>$c){
		    
			echo " l'ordre est A < C < B ($a<$c<$b)";
	   }
	   else {
		   
			echo " l'ordre est A < B < C ($a<$b<$c)";
	   } 
   }
   else if($a<$b && $a>$c) //sinon si
   {
	   echo " C est le plus petit sa valeur est $C ";
	   echo " l'ordre est C < A < B ($c<$a<$b)";
   }
   else if($a>$b && $a<$c)
   {
	   echo " b est le plus petit sa valeur est $b ";
	   echo " l'ordre est b < a < c ($b<$a<$c)";
	   
   }
   else if($a>$b && $a>$c)
   {
	   if($b>$c){
		    echo " C est le plus petit sa valeur est $c ";
			echo " l'ordre est C < B < A ($c<$b<$a)";
	   }
	   else {
		    echo " B est le plus petit sa valeur est $b ";
			echo " l'ordre est B < C < A ($b<$c<$a)";
	   }
   } */

?>
    
</body>
</html>