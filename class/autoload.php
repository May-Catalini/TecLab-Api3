<?php
/*@autor Mailen Catalini*/
class Autoload {
    static public function load_class($class) {
        $arrayClass = array();
        $base = __DIR__.DIRECTORY_SEPARATOR;
        $arrayClass['base_datos'] = $base.'database.php';
        $arrayClass['Categories'] = $base.'categories.php';
        $arrayClass['Products'] = $base.'products.php';

        if (isset($arrayClass[$class])) {
            if (file_exists(($arrayClass[$class]))){
                include $arrayClass[$class];
            } else {
                throw new Exception("File not found [{$arrayClass[$class]}]");
            }
        }
    }
}

spl_autoload_register('Autoload::load_class');


?>