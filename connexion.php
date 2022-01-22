
<?php

try
{
	// on se connecte à MySQL
    //mysql_select_db("salaires", $con);

	$con = new PDO('mysql:host=localhost;dbname=salaires;charset=utf8', 'root','Baye@fall1988');
    }
       catch(Exception $e)
    {
	// En cas d'erreur, on affiche un message et on arrete tout
	die('Erreur : '.$e->getMessage());
}
//echo "connexion reussi !!!";

$request= $con->prepare('SELECT * FROM retenues');
$request->execute();

//var_dump($request->fetch());Cette page ne fonctionne pasImpossible de traiter cette demande via localhost à l'heure actuelle.
