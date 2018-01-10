<?php
	require_once './require.php';
	
	//Déclaration des variables
	$mot = strip_tags($_POST['mot']);
	$langueOrigine = strip_tags($_POST['langueOrigine']);
	$langueCible = strip_tags($_POST['langueCible']);
	
	$connect = connect($db);
	
	//Requête pour chercher dans la base le mot traduit en fonction de la langue d'origine
	if($langueOrigine = 'FR'){
		$requete = $connect->prepare('SELECT * FROM mots WHERE FR = :mot');
	}
	else if($langueOrigine = 'EN'){
		$requete = $connect->prepare('SELECT * FROM mots WHERE EN = :mot');
	}
	else{
		$requete = $connect->prepare('SELECT * FROM mots WHERE ES = :mot');
	}
	$requete->execute([ ':mot' => $mot, ]);
	$resultat = $requete->fetch();
	
	//On renvoit le résultat du mot traduit
	echo $resultat[$langueCible];
?>