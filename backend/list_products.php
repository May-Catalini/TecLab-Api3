<?php

include '../class/autoload.php';


if(isset($_POST['accion']) && $_POST['accion'] == 'save') {
    $myProduct = new Products();
    $myProduct-> name = $_POST['name'];
    $myProduct-> image = $_POST['image'];
    $myProduct-> description = $_POST['description'];
    $myProduct-> price = $_POST['price'];
    $myProduct-> category_id = $_POST['category_id'];
    $myProduct->save();

} else if(isset($_GET['add'])) {
    include '../backend/views/products.html';
    die();
}
$category_names = Products::getCategoriesOptions();
$list_pro = Products::getList();


include '../backend/views/list_products.html';

?>