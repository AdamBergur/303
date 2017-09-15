<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/db_autocomplete/dbConnect.php';
    try{
        $result = $pdo->query('SELECT id, text FROM autocomplete');
    }
    catch (PDOException $e){
    $error = 'Error fetching autocomplete details.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/error/error.php';
    exit();
}
?>