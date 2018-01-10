<?php

require_once './require.php';

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
        case 'ajout_EN':
        case 'ajout_ES':
        case 'mot':
        case 'langue':
        case 'keyword':
            $output = check_trad($name, $value);
            break;
        case 'submit':
            $output = check_submit($name, $value);
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
 * Undocumented function.
 *
 * @param [type] $name
 * @param [type] $value
 */
function check_submit($name, $value)
{
    if ('get_Trad' === $value) {
        return true;
    }

    return false;
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

function autocomplete($content)
{
    return json_encode($content);
}
