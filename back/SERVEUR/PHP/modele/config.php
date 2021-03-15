<?php

/*connexion datas defined in those variables*/
$host = 'localhost';
$database_name = 'shomaei';
$database_username = 'shomaei';
$database_password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;charset=$charset;dbname=$database_name";/*data source name*/ 


//Tente de se connecter
try {

    //Instanciation de la connexion à la base
    $pdo = new PDO($dsn, $database_username, $database_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Si échec de la connexion (du try), on attrape l'exception avec catch
} catch (PDOException $exept) {
    // On affiche le message d'erreur
    throw new PDOException($exept->getMessage());
}
require_once('crud.php');
$crud = new crud($pdo);
?>