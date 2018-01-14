<?php

require_once './require.php';

$hasErrors = [];
$tempData = [];

$filter_post = [
    'ajout_FR' => [
        'filter'  => FILTER_CALLBACK,
        'options' => 'sanitize_string',
    ],
    'ajout_EN' => [
        'filter'  => FILTER_CALLBACK,
        'options' => 'sanitize_string',
    ],
    'ajout_ES' => [
        'filter'  => FILTER_CALLBACK,
        'options' => 'sanitize_string',
    ],
    ];
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
        $FR = mb_strtolower($tempData['ajout_FR']);
        $EN = mb_strtolower($tempData['ajout_EN']);
        $ES = mb_strtolower($tempData['ajout_ES']);

        $traduction = createTrad($db, $FR, $EN, $ES);
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
