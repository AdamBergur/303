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
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/db_autocomplete/insertComplete.php';
        header('Location: .');
        exit();
    }
    if (isset($_POST['action']) and  $_POST['action'] == 'Edit'){

        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/db_autocomplete/getCompleteID.php';

        $pageTitle = 'Edit Category';
        $action = 'editform';
        $name = $row['text'];
        $id = $row['id'];
        $button = 'Update category';
        include 'form.php';
        exit();
    }
    if (isset($_GET['editform'])){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/db_autocomplete/updateComplete.php';
        header('Location: .');
        exit();
    }
    if (isset($_POST['action']) and  $_POST['action'] == 'Delete') {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/db_autocomplete/deleteAutoComplete.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/db_autocomplete/deleteComplete.php';
        header('Location: .');
        exit();
    }

    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/db_autocomplete/getComplete.php';

foreach ($result as $row){
        $autocompleted[] = array('id' => $row['id'], 'text' => $row['text']);
    }

?>