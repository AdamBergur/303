<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/shop/db/dbConnect.php';

try{
    $result = $pdo->query('SELECT id, name, price, quantity FROM products');
}
catch (PDOException $e){
    $error = 'Error fetching category details.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/error/error.php';
    exit();
}

?>