<?php
    /*@autor Mailen Catalini*/
    class Products {
        public $id_product;
        public $name;
        public $image;
        public $description;
        public $price;
        public $category_id;
        private $exist = false;

        
        function __construct($id_product = null) {
            if ($id_product == null) return;
            $db = new base_datos("mysql", "myproject", "127.0.0.1", "root", "");
            $resp = $db->select("products", "id_product=?", array($id_product)); 

            if(isset($resp[0]['id_product'])) {
                $this->id_product = $resp[0][$id_product];
                $this->name = $resp[0]['name'];
                $this->image = $resp[0]['image'];
                $this->description = $resp[0]['description'];
                $this->price = $resp[0]['price'];
                $this->category_id = $resp[0]['category_id'];
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
            return $db->delete('products', 'id_product = ' . $this->id_product);
        }

        private function insert() {
            $db = new base_datos("mysql", "myproject", "127.0.0.1", "root", "");
            $resp = $db->insert('products','name=?,image=?,description=?,price=?,category_id', "?,?,?,?,?", array($this->name, $this->image, $this->description, $this->price, $this->category_id));

            if($resp) {
                $this->id_product = $resp;
                $this->exist = true;
                return true;
            } else {
                return false;
            }
        }

        private function update() {
            $db = new base_datos("mysql", "myproject", "127.0.0.1", "root", "");
            return $db->update('products','name=?,image=?,description=?,price=?,category_id=?', "id_product=?", array($this->id_product, $this->name, $this->image, $this->description, $this->price, $this->category_id));
        }


        static public function list() {
            $db = new base_datos("mysql", "myproject", "127.0.0.1", "root", "");
            return $db->joinList('products');
        }

        static public function getCategoriesOptions()
        {
            $db = new base_datos("mysql", "myproject", "127.0.0.1", "root", "");
            return $db->getCategoriesName();
        }
    }

?>