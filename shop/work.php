<?php

    if (isset($_GET['add'])){
        $pageTitle = 'New item';
        $action = 'addform';
        $price = '';
        $name = '';
        $id = '';
        $button = 'Add item';
        include 'form.php';
        exit();
    }

    if (isset($_GET['addform'])){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/shop/db/insertShop.php';
        header('Location: .');
        exit();
    }

    if (isset($_POST['action']) and  $_POST['action'] == 'Edit'){

        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/shop/db/getShopID.php';

        $pageTitle = 'Edit item';
        $action = 'editform';
        $price = '';
        $name = $row['name'];
        $id = $row['id'];
        $button = 'Update items';
        include 'form.php';
        exit();
    }

    if (isset($_GET['editform'])){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/shop/db/updateProduct.php';
        header('Location: .');
        exit();
    }



    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/shop/db/getShop.php';

foreach ($result as $row){
        $product[] = array('id' => $row['id'], 'name' => $row['name'], 'price' => $row['price'], 'quantity' => $row['quantity']);
    }

?>