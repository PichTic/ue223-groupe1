<?php

require_once 'db.php';

$hasErrors = [];
$tempData = [];

$filter_post = [
    'ajout_FR' => FILTER_SANITIZE_STRING,
    'ajout_EN' => FILTER_SANITIZE_STRING,
    'ajout_ES' => FILTER_SANITIZE_STRING,
];

/**
 * Undocumented function.
 *
 * @param [type] $name
 * @param [type] $value
 */
function check_field($name, $value)
{
    $output = false;

    switch ($name) {
        case 'ajout_FR':
            $output = check_trad($name, $value);
            break;
        case 'ajout_EN':
            $output = check_trad($name, $value);
            break;
        case 'ajout_ES':
            $output = check_trad($name, $value);
            break;
    }

    return $output;
}

/**
 * Undocumented function.
 *
 * @param [type] $name
 * @param [type] $value
 */
function check_trad($name, $value)
{
    $re = "/^[a-zA-ZÀ-ÖØ-öø-ÿ\-']{2,254}$/u";
    if (is_null($value) || ! preg_match($re, $value)) {
        return false;
    }

    return true;
}

/**
 * Formatte un message d'erreur.
 *
 * @param string $name nom de l'input
 *
 * @return string
 */
function errorMsg($name)
{
    return "<p>Le champ <em>{$name}</em> est invalide</p>";
}

/**
 * Créer la réponse JSON.
 *
 * @param string $status
 * @param array  $content
 *
 * @return string
 */
function resultats($status, $content)
{
    $tempArray = [
        'status'  => $status,
        'content' => $content,
    ];

    return json_encode($tempArray);
}

/*
 *
 */

if (filter_has_var(INPUT_POST, 'ajout_Trad')) {
    $resultats = filter_input_array(INPUT_POST, $filter_post);

    foreach ($resultats as $name => $value) {
        $check = check_field($name, $value);

        if (true === $check) {
            $tempData[$name] = $value;
        } else {
            $hasErrors[] = $name;

            $tempData[$name] = errorMsg($name);
        }
    }
    if (0 === count($hasErrors)) {
        $FR = $tempData['ajout_FR'];
        $EN = $tempData['ajout_EN'];
        $ES = $tempData['ajout_ES'];

        $traduction = createTrad($FR, $EN, $ES);
        if (! $traduction) {
            $hasErrors[] = 'query';
            $tempData['query'] = 'une erreur est survenue lors de la création de la traduction en BDD';
        } else {
            echo resultats('success', 'Votre traduction a bien été ajoutée');
            exit;
        }
    }
    if (count($hasErrors) > 0) {
        $msg = '';
        foreach ($hasErrors as $name) {
            $msg .= $tempData[$name];
        }

        echo resultats('fail', $msg);
    }
}
