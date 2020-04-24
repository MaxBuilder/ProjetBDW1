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
            $alert['messageAlert'] = ERREUR_CAT_EXIST;
            break;
        case 'Connecter' :
            $alert['messageAlert'] = MESSAGE_CONNECT;
            $alert['classAlert'] = 'info';
            break;
        case 'Deconnecter' :
            $alert['messageAlert'] = MESSAGE_DISCONNECT;
            $alert['classAlert'] = 'info';
            break;
        case 'pseudo_dispo' :
            $alert['messageAlert'] = ERREUR_PSEUDO_AVAIL;
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
        case 'photos_selection' :
            $alert['messageAlert'] = $nbP.PHOTOS_SELECTION;
            $alert['classAlert'] = 'info';
            break;
        case 'SuppressionOK' :
            $alert['messageAlert'] = SUPPR_OK;
            $alert['classAlert'] = 'info';
            break;
        case 'SupprError' :
            $alert['messageAlert'] = SUPPR_ERR;
        default :
            $alert['messageAlert'] = MESSAGE_ERREUR;
    }
    return $alert;
}
