<?php
    /*@autor Mailen Catalini*/
    class Categories {
        public $id_category;
        public $name;
        private $exist = false;


        function __construct($id_category = null)
        {
            if ($id_category == null)
                return;

            $db = new base_datos("mysql", "myproject", "127.0.0.1", "root", "");
            $resp = $db->select("categories", "id_category=?", array($id_category));

            if (isset($resp[0][$id_category])) {
                $this->id_category = $resp[0]['id_category'];
                $this->name = $resp[0]['name'];
                $this->exist = true;
            }
        }

        public function show() {
            echo '<pre>';
            print_r($this);
            echo '</pre>';
        }

        public function save() {
           if ($this->exist) {
            return $this->update();
           } else {
            return $this->insert();
           }
        }

        public function delete() {
            $db = new base_datos("mysql", "myproject", "127.0.0.1", "root", "");
            return $db->delete('categories', 'id_category = ' . $this->id_category);
        }

        private function insert() {
            $db = new base_datos("mysql", "myproject", "127.0.0.1", "root", "");
            $resp = $db->insert('categories','name=?', "?", array($this->name));

            if($resp) {
                $this->id_category = $resp;
                $this->exist = true;
                return true;
            } else {
                return false;
            }
        }

        private function update() {
            $db = new base_datos("mysql", "myproject", "127.0.0.1", "root", "");
            return $db->update('categories','name=?', "id_category=?", array($this->name, $this->id_category));
        }

        static public function list() {
            $db = new base_datos("mysql", "myproject", "127.0.0.1", "root", "");
            return $db->select('categories');
        }

    }

?>