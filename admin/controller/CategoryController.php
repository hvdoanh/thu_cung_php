<?php

    class CategoryController{
        public $categoryQuery;

        public function __construct(){
            $this->categoryQuery = new CategoryQuery();

        }

        public function __destruct(){

        }


        public function all_category(){
            $listCategory = $this->categoryQuery->all_category();
            

            include "view/category/list.php";
        }

        public function deleteCate($id){
            if($id !== ""){
                $ketQua = $this->categoryQuery->delete($id);

                if($ketQua === "ok"){
                    header("Location: ?act=list-category");

                }else{
                        echo "Xoá thất bại";
                }

            }else{
                echo " tham số id trống. Mời xem lại";
            }
        }

        public function showCreate(){
            $listCategory = $this->categoryQuery->all_category();
            
            if(isset($_POST['submitFormCreateCate'])){
                $category = new Category();
                $category->name = trim($_POST['name']);
                $category->status = trim($_POST['status']);

                if(isset($_FILES['image_upload']) && $_FILES['image_upload']['tmp_name']){
                    $hinh_anh = $_FILES['image_upload']['tmp_name'];
                    $vi_tri_luu = "../img/san-pham" . $_FILES['image_upload']['name'];

                    if(move_uploaded_file($hinh_anh,$vi_tri_luu)){
                        $category->image_src = 'img/san-pham' . $_FILES['image_upload']['name'];

                        echo "upload thàn công";
                    }else{
                        echo "upload thất bại";
                    }
                }


                $relust = $this->categoryQuery->insert($category);

                if($relust === "ok"){
                    echo "tạo mới thành công";
                    header("Location: ?act=list-category");
                }else{
                    echo "tạo mới thất bại";
                }
            }

            include "view/category/create.php";
        }
    

        public function Update($id){
        $listCategory = $this->categoryQuery->all_category();

            if($id !== ""){

                    if(isset($_POST['submitFormCreateCate'])){
                        $category = new Category();
                        $category->name = trim($_POST['name']);
                        $category->status = trim($_POST['status']);


                        if(isset($_FILES['image_upload']) && $_FILES['image_upload']['tmp_name']){
                            $hinh_anh = $_FILES['image_upload']['tmp_name'];
                            $vi_tri_luu = "../img/san-pham" . $_FILES['image_upload']['name'];

                            if(move_uploaded_file($hinh_anh, $vi_tri_luu)){
                                $category->image_src = "img/san-pham" .$_FILES['image_upload']['name'];
                                echo "upload thành công";

                            }else {
                                echo "upload thất bại";
                            }
                        }

                        $ketQua = $this->categoryQuery->update($id, $category);

                        if($ketQua === "ok"){
                            echo "tạo thành công";
                            header("Location: ?act=list-category");
                        }else{
                            echo "chỉnh sửa thất bại";
                        }
                    }
            }else{
                    echo " tham số id trống. Mời xem lại";
            }
            include "view/category/update.php";
        }
    }

?>