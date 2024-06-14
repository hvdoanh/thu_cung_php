<?php

    session_start();
    require_once "../commom/env.php";
    require_once "../commom/function.php";

    require_once "controller/ProductController.php";
    require_once "controller/BillController.php";
    require_once "controller/CategoryController.php";
    require_once "controller/AccountController.php";
    
    require_once "model/ProductQuery.php";
    require_once "model/Product.php";
    require_once "model/CategoryQuery.php";
    require_once "model/Category.php";
    require_once "model/Bill.php";
    require_once "model/BillQuery.php";
    require_once "model/Account.php";
    require_once "model/AccountQuery.php";

    $act = $_GET['act'] ?? "";
    $id = $_GET['id'] ?? "";

    //tài khoản có quyền truy cập vào trang admin

    if(isset($_SESSION["user_id"]) && isset($_SESSION["user_name"]) && $_SESSION["user_role"] === '1'){
        
        //Kiểm tra giá trị act để gọi phương thức tương ứng trong Controller tương ứng 
        // có thể  dùng switch-case
        match($act){
            '' => (new ProductController()) -> list(),
            'list-product' => (new ProductController()) -> list(),
            'create-pro' => (new ProductController()) -> showCreate(),
            'delete-pro' => (new ProductController()) -> deletePro($id),
            'update-pro' => (new ProductController()) -> Update($id),
            
            'list-category' => (new CategoryController()) -> all_category(),
            'delete-cate' => (new CategoryController()) -> deleteCate($id),
            'create-cate' => (new CategoryController()) -> showCreate(),
            'update-cate' => (new CategoryController()) -> Update($id),
     
    
            'list-bill' => (new BillController()) -> list(),
            'list-account' => (new AccountController()) ->list(),
            'logout' => (new  AccountController()) ->logout(),
        };
    }else{
        header('Location: ../index.php');
    }
    
    

?>