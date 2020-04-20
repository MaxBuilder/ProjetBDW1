<?php

function choixAlert($message, $nbP = 0)
{
    $alert = array();
    switch($message)
    {
        case 'Taille_FICH' :
            $alert['messageAlert'] = ERREUR_TAILLE;
            break;
        case 'FICHIER' :
            $alert['messageAlert'] = ERREUR_FICHIER;
            break;
        case 'choix_de_cat' :
            $alert['messageAlert'] = ERREUR_CHOIX_CAT;
            break;
        case 'categorieExist':
            $alert['massageAlert'] = ERREUR_CAT_EXIST;
            break;
        case 'ConnectER' :
            $alert['messageAlert'] = MESSAGE_CONNECT;
            $alert['classAlert'] = 'success';
            break;
        case 'MDP' :
            $alert['messageAlert'] = ERREUR_MDP;
            break;
        case 'Identif' :
            $alert['messageAlert'] = ERREUR_IDENTIFIANT;
            break;
        case 'query' :
            $alert['messageAlert'] = ERREUR_QUERY;
            break;
        case 'url_non_valide' :
            $alert['messageAlert'] = TEXTE_PAGE_404;
            break;
        case 'photos_selection':
            $alert['messageAlert'] = $nbP.PHOTOS_SELECTION;
            $alert['classAlert'] = 'success';
            break;
        default :
            $alert['messageAlert'] = MESSAGE_ERREUR;
    }
    return $alert;
}
