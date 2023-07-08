<?php

include '../class/autoload.php';

if(isset($_POST['accion']) && $_POST['accion'] == 'save') {
    $myCategory = new Categories();
    $myCategory-> name = $_POST['name'];
    $myCategory->save();
} else if(isset($_GET['add'])) {
    include '../backend/views/categories.html';
    die();
}

$list_ctg = Categories::list();

// $categories = array(
//     array(
//         "id" => 1,
//         "name" => "Laptops",
//     ),
//     array(
//         "id" => 2,
//         "name" => "Peripherals",
//     ),
//     array(
//         "id" => 3,
//         "name" => "Mobile phones",
//     ),
//     array(
//         "id" => 4,
//         "name" => "Computer components",
//     ),
//     array(
//         "id" => 5,
//         "name" => "Connectivity accessories	",
//     ),
// );

include '../backend/views/list_categories.html';


?>