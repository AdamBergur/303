<?php

if (isset($_GET['add'])){
        $pageTitle = 'New Category';
        $action = 'addform';
        $name = '';
        $id = '';
        $button = 'Add category';
        include 'form.php';
        exit();
    }
    if (isset($_GET['addform'])){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/db/insertAuthor.php';
        header('Location: .');
        exit();
    }
    if (isset($_POST['action']) and  $_POST['action'] == 'Edit'){

        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/db/getAuthorWhereId.php';

        $pageTitle = 'Edit Category';
        $action = 'editform';
        $name = $row['name'];
        $id = $row['id'];
        $button = 'Update category';
        include 'form.php';
        exit();
    }
    if (isset($_GET['editform'])){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/db/updateAuthor.php';
        header('Location: .');
        exit();
    }
    if (isset($_POST['action']) and  $_POST['action'] == 'Delete') {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/db/deleteJokeAuthor.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/db/deleteAuthor.php';
        header('Location: .');
        exit();
    }
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/db/getAuthor.php';
foreach ($result as $row){
        $authors[] = array('id' => $row['id'], 'name' => $row['name']);
    }

?>