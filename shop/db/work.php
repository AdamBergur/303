<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/hopur6/shop/db/getComplete.php';

foreach ($result as $row){
$autocompleted[] = array('id' => $row['id'], 'text' => $row['text']);
}

?>