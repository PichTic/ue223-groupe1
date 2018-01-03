<?php

// Paramètres de connexion à la base de données
function connect()
{
    $db = [
        'User'   => 'homestead',
        'Name'   => 'ue223_groupe1',
        'Server' => 'localhost',
        'Pass'   => 'secret',
        'Port'   => '3306',
    ];

    $dsn = "mysql:dbname={$db['Name']};host={$db['Server']};port={$db['Port']};charset=utf8";

    try {
        $connect = new PDO($dsn, $db['User'], $db['Pass']);
    } catch (PDOException $e) {
        printf("Erreur de connexion : %s\n", $e->getMessage());
    }

    $connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $connect;
}

function deconnect($connect)
{
    unset($connect);
}

function createTrad($FR, $EN, $ES)
{
    $sql = 'INSERT INTO `mots` (`FR`, `EN`, `ES`) VALUES (:FR, :EN, :ES)';

    $connect = connect();
    $query = $connect->prepare($sql);

    $created = $query->execute([
      'FR'  => $FR,
      'EN'  => $EN,
      'ES'  => $ES,
      ]);

    deconnect($connect);

    return $created;
}
