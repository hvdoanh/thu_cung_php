<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/be9ed8669f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
        include "view/components/header.php";
    ?>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main class="container">
        <!-- Main content -->
        <div class="shadow bg-light mt-4 ms-4 mb-4 p-4">
            <!-- Slide -->
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= BASE_URL . 'img/slide 1.jpg'  ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= BASE_URL.  '/img/slide2.jpg'?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- End slide -->
            <!-- Sản phẩm bán chạy -->
            <h3 class="mt-3">Sản phẩm mới nhất</h3>
            <hr>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <?php  foreach ($listProductLatest as $sp) : ?>
                <!-- Box sản phẩm -->
                <div class="col">
                    <div class="card">
                        <img src=" <?= BASE_URL. $sp->image_src ?>" class="card-img-top w-100"
                            style="height: 150px; object-fit: cover;" alt="<?= $sp->name ?>">
                        <div class="card-body flex-1">
                            <h5 class="card-title truncate"><?= $sp->name ?></h5>
                            <span class="fw-bold"><?= number_format( $sp->price,0,"",".")  ?> VND</span>
                            <form action="?act=cart" method="POST">
                                <input type="hidden" name="id" value="<?=$sp->id ?>">
                                <input type="hidden" name="quantity" value="1">
                                <button class="btn btn-danger rounded-pill w-100 btn-sm mt-1" name="addToCart">Mua
                                    ngay</button>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- Hết box sản phẩm -->
                <?php endforeach; ?>
            </div>
            <!-- Hết sản phẩm -->
        </div>
        <!-- End main content -->
    </main>
    <!-- FOOTER -->
    <?php
        include "view/components/footer.php";
    ?>
    <!-- END FOOTER -->
</body>

</html>