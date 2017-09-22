<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/shop/db/dbConnect.php';
try{
    $sql = 'INSERT INTO products SET name = :name';
    $s = $pdo->prepare($sql);
    $s->bindValue(':name', $_POST['name']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error adding submitted products.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/error/error.php';
    exit();
}
?>