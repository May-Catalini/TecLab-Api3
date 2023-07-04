clase categoria, atributos, metodos gurdar y eliminar.
<?php
    /*@autor Mailen Catalini*/
    try {
        $list_categories = $db->select('categories');
        foreach ($list_categories as $row) {
            echo 'ID: ' . $row['id_categorie'] . ', Name: ' . $row['name'] . $products['products_id'] . '<br>';
        }
    } catch (Exception $e) {
        echo 'Error en la consulta: ' . $e->getMessage();
    }

?>