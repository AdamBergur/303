<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/db_autocomplete/dbConnect.php';
    try{
        $sql = 'UPDATE autocomplete SET text = :name WHERE id = :id';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->bindValue(':id', $_POST['id']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error updating submitted autocomplete.';
        include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/error/error.php';
        exit();
    }
?>