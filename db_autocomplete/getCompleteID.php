<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/db_autocomplete/dbConnect.php';

    try{
        $sql = 'SELECT id, text FROM autocomplete WHERE id = :id';
        $s = $pdo->prepare($sql);
        $s->bindValue(':id', $_POST['id']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error fetching autocomplete details.' . $e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/error/error.php';
        exit();
    }
    $row = $s->fetch();
?>