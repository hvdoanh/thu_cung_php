<?php
    class ProductQuery{
        public $pdo;

        public function __construct(){
            $this->pdo  = connectDB();
        }

        public function __destruct(){
            $this->pdo = null;
        }

        public function getTop8ProductLatest(){
            try {
                $sql = "SELECT * FROM product ORDER BY id DESC LIMIT 8";

                $data = $this->pdo->query($sql)->fetchAll();

                $ds = [];

                foreach($data as $row){
                    $product = converToObjectProduct($row);
                    $ds[] = $product;

                }
                return $ds;
                
            }catch(Exception $e){
                echo "Lỗi//".$e->getMessage();
                echo "<hr>";
            }
        }

        public function find($id){
            try{
                $sql = "SELECT * FROM product WHERE id = $id";

                $data = $this->pdo->query($sql)->fetch();

                $product = converToObjectProduct($data);
                return $product;

            }catch(Exception $e){
                echo "Lỗi//".$e->getMessage();
                echo "<hr>";
            }
        }
        
    }

    

?>