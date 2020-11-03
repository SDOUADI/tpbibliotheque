<?php
echo "valid";

$password=$_GET["password"];

if(strlen($password)< 8){
    echo "Not Valid";
}
else{
    echo "Valid";
    
}

?>