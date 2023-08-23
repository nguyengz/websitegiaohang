<?php
session_start();
// include "../../utils/connectDB.php";
// include "../../utils/curency_format.php";
// include "../../model/bookModel.php";
// include "../../model/loaiModel.php";
// $book = new bookModel(1, 1, 1, 1, 1, 1, 1); //fake data
// $arrayOb = $book->getAllBook();
// $loai = new loaiModel(1,1);
// $result = $loai->getAllLoai();

// $arrayOb = array()
?>
<!DOCTYPE html>
<html>
<?php include "layout/head.php" ?>
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
</style>

<body>
    <?php
    include "./controler/signIn.php"

    ?>
    <div class="header w-100">
        <h2 class="my-3"> <a href="./index.php">Giao hàng</a> </h2>
    </div>
    <section class="vh-100">
        <div class="container py-2 my-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6 ">
                    <img src="./public/images/4154-teamworking.png" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 bg-light my-auto" style="min-height: 500px; border-radius: 10%;">
                    <h3 class="my-2 text-center text-primary">Đăng nhập</h3>
                    <form method="get" action="" class="my-5">
                        <!-- Email input -->
                        <div class="form-outline mt-5">
                            <input type="text" id="sdt" name="sdt" class="form-control form-control-lg" placeholder="Tên đăng nhập" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline my-5">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Mật khẩu" />
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block mt-5">Sign in</button>

                        <div class="divider d-flex align-items-center my-1">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">Hoặc</p>
                        </div>
                        <a href="../website_vanchuyen/controler/signIn.php" class="btn btn-primary btn-lg btn-block">Sign up</a>
                        <!-- <button onclick="window.location.href='../website_vanchuyen/SignIn.php'" class="btn btn-primary btn-lg btn-block"> Sign up</button> -->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include "./layout/js.php" ?>
</body>

</html>