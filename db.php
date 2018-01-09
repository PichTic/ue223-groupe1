<?php

require_once './config.php';
// Paramètres de connexion à la base de données
function connect($db)
{
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

function createTrad($db, $FR, $EN, $ES)
{
    $sql = 'INSERT INTO `mots` (`FR`, `EN`, `ES`) VALUES (:FR, :EN, :ES)';

    $connect = connect($db);
    $query = $connect->prepare($sql);

    $created = $query->execute([
      'FR'  => $FR,
      'EN'  => $EN,
      'ES'  => $ES,
      ]);

    deconnect($connect);

    return $created;
}
