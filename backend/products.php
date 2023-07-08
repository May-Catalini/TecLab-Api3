<?php
include '../class/autoload.php';

$category_names = Products::getCategoriesOptions();


include '../backend/views/products.html';
?>
