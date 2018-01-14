<?php

require_once './require.php';

$hasErrors = [];
$tempData = [];

$filter_get = [
  'langue' => [
    'filter'  => FILTER_CALLBACK,
    'options' => function ($input) {
        $reponse = (empty($input)) ? null : false;
        $options = ['FR', 'EN', 'ES'];
        if (in_array($input, $options)) {
            $reponse = $input;
        }

        return $reponse;
    },
  ],
  'keyword' => [
    'filter'  => FILTER_CALLBACK,
    'options' => 'sanitize_string',
    ],
  'submit'  => [
    'filter'  => FILTER_CALLBACK,
    'options' => function ($input) {
        $reponse = false;
        if ('get_Trad' === $input) {
            $reponse = $input;
        }

        return $reponse;
    },
  ],
];

if (filter_has_var(INPUT_GET, 'submit')) {
    //echo 'success';

    $resultats = filter_input_array(INPUT_GET, $filter_get);

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
        $keyword = $tempData['keyword'];
        $langue = $tempData['langue'];

        $traduction = findWords($db, $langue, $keyword);
        echo autocomplete($traduction);
        exit;
    }
}
