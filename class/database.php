<?php
/*@autor Mailen Catalini*/

try {
    $connect = $db = new base_datos("mysql", "myproject", "127.0.0.1", "root", "");
    echo 'Successful connection';
} catch (Exception $ex) {
    echo 'Filed Conection' . $ex->getMessage();
}
class base_datos
{
    private $gbd;

    function __construct($driver, $base_datos, $host, $user, $pass)
    {
        $conection = $driver . ":dbname=" . $base_datos . ";host=$host";
        $this->gbd = new PDO($conection, $user, $pass);

        if (!$this->gbd) {
            throw new Exception("Filed Conection");
        }
    }

    function select($tabla, $filtros = null, $arr_prepare = null, $orden = null, $limit = null)
    {
        $sql = "SELECT * FROM " . $tabla;
        if ($filtros != null) {
            $sql .= " WHERE " . $filtros;
        }
        if ($orden != null) {
            $sql .= " ORDER BY " . $orden;
        }
        if ($limit != null) {
            $sql .= " LIMIT " . $limit;
        }

        $resourse = $this->gbd->prepare($sql);
        $resourse->execute($arr_prepare);
        if ($resourse) {
            return $resourse->fetchAll(PDO::FETCH_ASSOC);
        } else {
            throw new Exception("No se pudo realizar la consulta");
        }
    }

    function joinList($tabla, $filtros = null, $arr_prepare = null, $orden = null, $limit = null)
    {
        $sql = "SELECT p.id_product, p.name, p.image, p.description, p.price, c.name ";
        $sql .= "FROM " . $tabla . " p ";
        $sql .= "JOIN categories c ON c.id_category = p.category_id ";
        if ($filtros != null) {
            $sql .= "WHERE " . $filtros;
        }
        if ($orden != null) {
            $sql .= " ORDER BY " . $orden;
        }
        if ($limit != null) {
            $sql .= " LIMIT " . $limit;
        }

        $resourse = $this->gbd->prepare($sql);
        $resourse->execute($arr_prepare);
        if ($resourse) {
            return $resourse->fetchAll(PDO::FETCH_ASSOC);
        } else {
            throw new Exception("No se pudo realizar la selección");
        }
    }


    function delete($tabla, $filtros = null, $arr_prepare = null)
    {
        $sql = "DELETE FROM " . $tabla . "WHERE" . $filtros;

        $resourse = $this->gbd->prepare($sql);
        $resourse->execute($arr_prepare);
        if ($resourse) {
            return true;
        } else {
            throw new Exception("No se pudo realizar la eliminación");
        }
    }

    function insert($tabla, $campos, $valores, $arr_prepare = null)
    {
        $sql = "INSERT INTO " . $tabla . " (" . $campos . ") VALUES (" . $valores . ")";

        $resourse = $this->gbd->prepare($sql);
        $resourse->execute($arr_prepare);
        if ($resourse) {
            return $this->gbd->lastInsertId();
        } else {
            echo '<pre>';
            print_r($resourse->errorInfo());
            echo '</pre>';
            throw new Exception("No se pudo realizar la inserción");
        }
    }

    function update($tabla, $campos, $filtros, $arr_prepare = null)
    {
        $sql = "UPDATE " . $tabla . " SET " . $campos . " WHERE " . $filtros;

        $resourse = $this->gbd->prepare($sql);
        $resourse->execute($arr_prepare);
        if ($resourse) {
            return true;
        } else {
            echo '<pre>';
            print_r($resourse->errorInfo());
            echo '</pre>';
            throw new Exception("No se pudo realizar la actualización");
        }

    }
}

?>