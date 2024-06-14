<?php
    class AccountController{
        
        public $accountQuery;
        public $categoryQuery;

        public function __construct(){
            $this->accountQuery = new AccountQuery();
             $this->categoryQuery = new CategoryQuery();
        }

        public function __destruct(){
            
        }

        public function list(){
            $listCategory = $this->categoryQuery->all_category();
            //goi model
            $danh_sach_tai_khoan = $this->accountQuery->all_account();
            //hiện vào viêw
            include "view/account/list.php";
        }
        public function logout(){

           
           session_destroy();
            header("Location: ?act=login");
        }
    }

    
?>