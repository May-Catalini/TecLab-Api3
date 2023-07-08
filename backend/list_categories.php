listado de categorias con sus cprrespondientes html.

<?php

try {
    $list_categories = $db->select('categories');
    foreach ($list_categories as $row) {
        echo 'ID: ' . $row['id_category'] . ', Name: ' . $row['name'] . $products['products_id'] . '<br>';
    }
} catch (Exception $e) {
    echo 'Error en la consulta: ' . $e->getMessage();
}

?>