<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=shop', 'shop', 'shop');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e){
    $error = 'Unable to connect to database' . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/shop/error/error.php';
    exit();
}

?>