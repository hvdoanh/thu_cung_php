<?php
    class AccountQuery{
        public $pdo;

        public function __construct(){
            $this->pdo = connectDB();
        }
        
        public function __destruct(){
            $this->pdo = null;
        }

        public function all_account(){
            try {
                $sql = "SELECT * FROM account";

                $data = $this->pdo->query($sql)->fetchAll();

                $danh_sach_account = [];
                
                foreach($data as $row){
                    $account = new Account();
                    $account->id = $row['id'];
                    $account->name = $row['name'];
                    $account->address = $row['address'];
                    $account->email = $row['email'];
                    $account->role = $row['role'];
                    
                    $danh_sach_account[] = $account;
                }
                return $danh_sach_account;
            } catch (Exception $e) {
                //throw $th;
            }
        }
        
        
    }

?>