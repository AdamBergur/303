
<?php

include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/db_autocomplete/dbConnect.php';
try {
    $sql = 'DELETE FROM autocomplete WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error delete autocomplete.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/error/error.php';
    exit();
}
?>