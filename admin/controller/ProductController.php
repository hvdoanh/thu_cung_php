<?php
    class  ProductController{
        public $productQuery;
        public $categoryQuery;

        public function __construct(){
            $this->productQuery = new ProductQuery();
            $this->categoryQuery = new CategoryQuery();
        }

        public function __destruct(){
            
        }

        public function list(){
            
            //gọi model lấy danh sách sản phẩm
           $danhSachSp = $this->productQuery->all();
           $listCategory = $this->categoryQuery->all_category();

           
            //hiện thị view tương ứng 
            include "view/product/list.php";
        }

        public function showCreate(){
            $listCategory = $this->categoryQuery->all_category();

            // thuwcj hieenj xuwr lys logic 
            // ktra nut tao
            if(isset($_POST['submitFormCreateProduct'])){
                // lấy dữ liệu -> object
                $product = new Product();
                $product->name = trim($_POST['name']);
                $product->price = trim($_POST['price']);
                $product->description = trim($_POST['description']);
                $product->status = trim($_POST['status']);
                $product->quantity = trim($_POST['quantity']);
                $product->category_id = trim($_POST['category_id']);

                if(isset($_FILES['image_upload']) && $_FILES['image_upload']['tmp_name']){
                    $image = $_FILES['image_upload']['tmp_name'];
                    $vi_tri_luu_anh = "../img/san-pham" . $_FILES['image_upload']['name'];

                    if(move_uploaded_file($image , $vi_tri_luu_anh)){
                        echo "ip;oad ảnh tyhanfh công";
                        $product->image_src = 'img/san-pham' . $_FILES['image_upload']['name'];
                    }else{
                        echo "upload thất bại";
                    }
                }

                $result = $this->productQuery->create($product);
                if($result === "Ok") {
                    //quay về trang danh sách

                    header("Location: ?act=list-product");
                }else{
                    echo "tạo mới thất bại . mời kiểm tra";
                }



            }
            
            include "view/product/create.php";
        }

       public function deletePro($id){
        $listCategory = $this->categoryQuery->all_category();


        if ($id !== "") {
            $ketQua = $this->productQuery->delete($id);

            if($ketQua === "ok"){

                header("Location: ?act=list-product");
            }else{
                echo"Xoá thất bại";
            }

        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }    
         
       }

       public function Update($id){
        $listCategory = $this->categoryQuery->all_category();

            if($id !== ""){
                $product = new Product();

                $product = $this->productQuery->find($id);

                if(isset($_POST['submitFormCreateProduct'])){
                    // lấy dữ liệu -> object
                    $product = new Product();
                    $product->name = trim($_POST['name']);
                    $product->price = trim($_POST['price']);
                    $product->description = trim($_POST['description']);
                    $product->status = trim($_POST['status']);
                    $product->quantity = trim($_POST['quantity']);
                    $product->category_id = trim($_POST['category_id']);
    
                    if(isset($_FILES['image_upload']) && $_FILES['image_upload']['tmp_name']){
                        $image = $_FILES['image_upload']['tmp_name'];
                        $vi_tri_luu_anh = "../img/san-pham" . $_FILES['image_upload']['name'];
    
                        if(move_uploaded_file($image , $vi_tri_luu_anh)){
                            echo "ip;oad ảnh tyhanfh công";
                            $product->image_src = 'img/san-pham' . $_FILES['image_upload']['name'];
                        }else{
                            echo "upload thất bại";
                        }
                    }
    
                    $result = $this->productQuery->update($id,$product);
                    if($result === "ok") {
                        //quay về trang danh sách
    
                        header("Location: ?act=list-product");
                    }else{
                        echo "Chỉnh Sửa  thất bại . mời kiểm tra";
                    }
    
    
    
                }

                include "view/product/update.php";
            }else{
                echo " Lỗi tham số id trông . Mời bạn nhập lại";
        }




       }
        
       
    }


?>