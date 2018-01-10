<?php
	require_once 'db.php';
	require_once 'config.php';

	$hasErrors =[];
	$tempData = [];

	$filter_post = [
		'lang_trad' => FILTER_SANITIZE_STRING,
		'lang_cible' => FILTER_SANITIZE_STRING,
		'mot' => FILTER_SANITIZE_STRING,
	];
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

	$resultats = filter_input_array(INPUT_POST, $filter_post);

	foreach ($resultats as $name => $value) {
		$tempData[$name]=$value;
	}
	if ($tempData['mot'])