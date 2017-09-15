<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/db_autocomplete/dbConnect.php';
    try{
        $sql = 'INSERT INTO autocomplete SET text = :name';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error adding submitted autocomplete.';
        include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/error/error.php';
        exit();
    }
?>