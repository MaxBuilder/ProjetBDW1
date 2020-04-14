<?php
// accès base de données
// connection à la base de données
try
{
	/// etablir une connexion a la base de données
}
catch()
{
	$erreur = 'connexion';
}

// s'il n'y a pas d'erreurs : recherche dans la base de l'utilisateur
if(!isset($erreur) && isset($nom))
{

	// ici generer vos requettes
	$requete = "";
	$donnees = array(
					$nom,
					);
	try
	{
		// a l'interieur de ce block executer la requette et verifier le resultat retourné

	}
	catch()
	{
		$erreur = 'query';
	}
}
