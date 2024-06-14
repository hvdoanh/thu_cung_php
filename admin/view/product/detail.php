<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/be9ed8669f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
        include "view/components/header.php";
    ?>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main class="container">
        <!-- Main content -->
        <div class="row p-4">
            <div class="col-md-4 rounded-2">
                <img src="../img/san-pham/sanpham10.png" class="rounded-4" alt="">
            </div>
            <?php foreach($chiTietSanPham as $sp ) :?>
            <div class="col-md-6 d-flex justify-content-center flex-column">
                <h3 class="fw-bold fs-2"><?= $sp->name ?></h3>
                <h2 class="text-danger fw-bold pe-2 fs-5s">10.000.000 VNĐ</h2>
                <div class="d-flex align-items-center">
                    <span class="text-body text-decoration-line-through ps-2 fs-5">20.000.000 VNĐ</span>
                    <span class="badge bg-success rounded-pill ps-2 ms-3"> Còn hàng </span>
                </div>
                <br>
                <nav aria-label="Page navigation example">
                    <ul class="pagination d-flex">
                        <li class="page-item">
                            <a class="page-link text-success" aria-label="Next">
                                <span> - </span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link text-success" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link text-success" aria-label="Previous">
                                <i class="fa-solid fa-plus fa-xs"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <span> Số lượng: 10</span>
                <br>
                <div>
                    <a href="./XacNhanSp.html"><button class="btn btn-success">Mua ngay</button></a>
                    <button class="btn btn-success">Thêm vào giỏ hàng</button>
                </div>
                <br>
                <div class="border-top">
                    <span class=" pt-1">Danh mục: Chó cảnh</span>
                </div>
                <br>
            </div>
            <?php endforeach; ?>

        </div>
        <!-- End main content -->
        <!-- Product description -->
        <h3>Mô tả sản phẩm</h3>
        <hr>
        <p>
            Từng có một thời gian, việc nuôi chó lai Nhật với Bắc Kinh được xem là một trào lưu thịnh hành. Gần như ai
            cũng sở hữu cho mình một bé chó xù Nhật vô cùng đáng yêu và mang một bản sắc riêng. Mặc dù nổi tiếng là vậy,
            thế nhưng không nhiều người hiểu rõ về giống chó cảnh này. Vậy bạn có biết các giống Nhật lai Bắc Kinh được
            ra đời như thế nào hay không?
            Nguồn gốc của chó Bắc Kinh Nhật lông xù
            Chó Bắc Kinh lai Nhật là một giống chó lai được ra đời dựa trên sự kết hợp của 2 giống chó Nhật thuần chủng
            và chó Bắc Kinh thuần chủng. Với những sự tương đồng về hình dáng và có những vẻ đẹp riêng, các giống chó
            Nhật lai Bắc Kinh dễ dàng khiến người ta phát cuồng vì vẻ ngoài của chính mình.
            Những bé chó Bắc Kinh lai với Nhật dễ dàng được đón nhận nồng nhiệt với chúng hội tụ đủ những tính trạng
            trội từ 2 dòng chó gốc. Nguyên do chủ yếu là bởi giống chó Nhật với Bắc Kinh có họ gần nhau. Vì thế, ở một
            số khía cạnh, chúng có sự kết hợp khá hoàn hảo.
            Đồng thời điều khiến các bé chó lông xù Nhật lai Bắc Kinh được xem trọng về giá trị là bởi 2 dòng chó bố mẹ
            chuẩn chủng tạo ra các bé là khá hiếm. Sự ra đời của các bé chó Nhật lai Bắc Kinh được xem là môt cách để
            giữ gìn những đặc tính tốt của 2 loài chó này. Tuy nhiên trước sự yêu mến lớn từ những người yêu chó, các bé
            chó bắc kinh lai Nhật trưởng thành hay còn bé đã ngày một được nhân giống nhiều hơn.
            Chó Bắc Kinh Nhật bao nhiêu kg? Hình dáng như thế nào
            Việc một bé chó Nhật Bắc Kinh có ngoại hình trội hơn về giống Nhật hay Bắc Kinh hoàn toàn phụ thuộc vào yếu
            tố xem bố hay mẹ của các bé là giống loài nào. vì lẽ đó mà cân nặng và hình dáng của các bé sẽ bị phụ thuộc
            khá nhiều vào chủng loại của bố mẹ. Vậy cân nặng và hình dáng các bé chó lai này là gì bạn có biết?
        </p>
    </main>
    <!-- FOOTER -->

    <?php
        include "view/components/footer.php";
    ?>
    <!-- END FOOTER -->
</body>

</html>