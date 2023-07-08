<?php

include '../class/autoload.php';

if(isset($_POST['accion']) && $_POST['accion'] == 'save') {
    $myCategory = new Categories();
    $myCategory-> name_category = $_POST['name_category'];
    $myCategory->save();
} else if(isset($_GET['add'])) {
    include '../backend/views/categories.html';
    die();
}

$list_ctg = Categories::list();

include '../backend/views/list_categories.html';


?>