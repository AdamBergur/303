<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/shop/db/dbConnect.php';

try
{
    $sql = 'DELETE FROM products WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();

}
catch (PDOException $e)
{
    $error = 'Error deleting products.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/shop/error/error.php';
}

?>