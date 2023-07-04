<!-- si vienen parametros por el post.
crear el objeto correspondiente y llamar su funcion de guardado. -->

<?php

$products = array(
    array(
        "id" => 1,
        "name" => "Asus TUF Gaming F15",
        "price" => "$1520",
        "description" => "Ipsum, dolor sit amet consectetur adipisicing elit. Vel in cumque explvoluptate, eius tempore natus aut minus dicta praesentium id, reiciendis quibusdam porro veritatis.",
        "category" => "Laptops",
        "image" => "./../assets/img/asus.jpg"
    ),
    array(
        "id" => 2,
        "name" => "Redragon keyboard",
        "price" => "$110",
        "description" => "Ipsum, dolor sit amet consectetupraesentium id, reiciendis quibusdam porro veritatis.",
        "category" => "Peripherals",
        "image" => "./../assets/img/teclado.jpg"
    ),
    array(
        "id" => 4,
        "name" => "Samsung A54",
        "price" => "$520",
        "description" => "Ipsum, dolor sit amet consectetur adipisicing elit. Vel inus dicta praesentium id, reiciendis quibusdam porro veritatis.",
        "category" => "Mobile phones",
        "image" => "./../assets/img/samsung.jpg"
    ),
    array(
        "id" => 5,
        "name" => "Intel Core i5",
        "price" => "$230",
        "description" => "Ipsum, dolor sit amet consectetur adipisicing elit. Vel in cumque explvoluptate, eius tempore natus aut minus ium id, reiciendis quibusdam porro veritatis.",
        "category" => "Computer component",
        "image" => "./../assets/img/intelCore.jpg"
    ),
    array(
        "id" => 6,
        "name" => "HDMI wire",
        "price" => "$50",
        "description" => "Ipsum, dolor sit amet consectetur adipisicing elit. Vel in cumque entium id, reiciendis quibusdam porro veritatis.",
        "category" => "Connectivity accessories",
        "image" => "./../assets/img/cable.jpg"
    ),
    array(
        "id" => 7,
        "name" => "Redragon headphones",
        "price" => "$75",
        "description" => "Ipsum, dolor sit amet consectetur adipisicing elit. Vel, eius tempore natus aut minus dicta praesentium id, reiciendis quibusdam porro veritatis.",
        "category" => "Peripherals",
        "image" => "./../assets/img/auriculares.jpg"
    ),
);

include '../backend/views/list_products.html';


?>