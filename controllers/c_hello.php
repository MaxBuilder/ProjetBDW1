<?php

// Contrôle - Neutralisation du paramètre reçu
if (isset($_POST['nom']))
{
  $nom =  htmlspecialchars($_POST['nom']);

  //Appel du modèle
  require_once(PATH_MODELS.$page.'.php');// qui fait la connexion a la base de données
  if(isset($erreur)) // affichage des erreurs de login
  {
     header('Location: index.php?message='.$erreur.'&nom='.$nom);
  }
  else
  {
    require_once(PATH_VIEWS.$page.'.php');
  }
}
else
{
     header('Location: index.php');
}
