<?php

$servname = "localhost"; $dbname = "bd_sonia_biblio"; $dbuser = "root"; $dbpass = "";

$conn = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);







