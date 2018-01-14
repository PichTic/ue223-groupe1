<?php
    require_once './require.php';

    //Déclaration des variables

    $langueOrigine = sanitize_string($_POST['langueOrigine']);

    //Requête pour chercher dans la base le mot traduit en fonction de la langue d'origine
    if ('FR' == $langueOrigine) {
        $mot = sanitize_string($_POST['mot']);
        $langueCible = sanitize_string($_POST['langueCible']);
        $resultat = getTrad($db, $langueOrigine, $langueCible, $mot);
    } elseif ('EN' == $langueOrigine) {
        $mot = sanitize_string($_POST['mot']);
        $langue = sanitize_string($_POST['langueCible']);
        $resultat = getTrad($db, $langueOrigine, $langueCible, $mot);
    } else {
        $mot = sanitize_string($_POST['mot']);
        $langue = sanitize_string($_POST['langueCible']);
        $resultat = getTrad($db, $langueOrigine, $langueCible, $mot);
    }

    //On renvoit le résultat du mot traduit

    if (0 === count($resultat)) {
        echo resultats('failed', '');
    } else {
        echo resultats('success', $resultat);
    }
