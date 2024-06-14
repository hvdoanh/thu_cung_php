<header class="bg-light pb-2 pt-2">
    <div class="container">
        <!-- Header top -->
        <div class="d-flex justify-content-between align-items-center pb-2">
            <!-- Left -->
            <div class="d-flex justify-content-between align-items-center">
                <div class="pe-3">
                    <i class="fa-solid fa-phone"></i> +8412345678
                </div>
                <div>
                    <i class="fa-solid fa-envelope"></i> <?php if(isset($_SESSION['user_email'])) {?>
                    <?= $_SESSION['user_email'] ?>
                    <?php }else""?>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <i class="fa-solid fa-user me-2"></i>
                <?php if(isset($_SESSION['user_name'])) {?>
                Xin chào <?= $_SESSION['user_name'] ?> -
                <a href="?act=logout">Logout</a>
                <?php }else {?>
                <a href="?act=login">Login</a>
                <?php  }?>
            </div>
        </div>
        <!-- End header top -->
        <!-- Header bottom -->
        <div class="d-flex justify-content-between align-items-center bg-white rounded-pill mb-2">
            <div class="d-flex align-items-center justify-content-center p-2 ms-2">
                <img src="./img/logo.png" class="pe-2" alt="">
                <h3 class='mb-0'>PET SHOP </h3>
            </div>
            <!-- MENU -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                        <?php
                            foreach($listCategory as $category):
                        ?>
                        <a class="nav-link" href="#"><?= $category->name  ?></a>

                        <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </nav>
            <!-- END MENU -->
            <div class="d-flex justify-content-between align-items-center pe-2">
                <form class="d-flex" role="search">
                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Search"
                        aria-label="Search">
                </form>
                <i class="fa-regular fa-heart me-2"></i>
                <i class="fa-solid fa-cart-shopping me-2"></i>
            </div>
        </div>
        <!-- End header bottom -->
    </div>
</header>