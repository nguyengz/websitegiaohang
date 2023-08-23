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

<body>

    <?php include "./layout/pre-loader.php" ?>
    <?php include "./layout/header.php" ?>

    <?php include "./layout/right-sidebar.php" ?>

    <?php
    include "./layout/left_side_bar.php";
    ?>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">

            <i class="bi bi-house-check"></i>

        </div>
        <div class="card-box mb-30" style="padding-bottom: 300px;">
            <div class="page-header">
                <h3>Xem thông tin đơn hàng</h3>
                <p>Admin > Quản lí đơn hàng > <span style="font-weight: 1000;">Chi tiết tin đơn hàng</span></p>
            </div>

            <div class="pd-20" style="margin-bottom: 70px;">
                <p>Nhân viên giao hàng: XXX</p>
                <p>Mã đơn hàng: 123</p>
            </div>
            <hr>
            <div style="  display: flex; text-align: center;
    justify-content:space-around;">
                <div><i class="bi bi-hourglass-split"></i>
                    <br>Đang xử lý
                </div>

                <div><i class="bi bi-house-door-fill"></i>
                    <br>Đã đóng gói
                </div>

                <div> <i class="bi bi-truck"></i> <br>Đang vận chuyển</div>

                <div><i class="bi bi-check-lg"></i> <br>Đã giao hàng</div>


            </div>
            <div style=" display:flex;    justify-content: center;    margin-top: 56px;">
                <button style="width: 200px;height: 36px;background: #100CBB; color:#fff;
border-radius: 20px;"> Cập nhật trạng thái</button>
            </div>






        </div>
        <!-- Simple Datatable End -->
        <!-- multiple select row Datatable start -->

        <!-- multiple select row Datatable End -->
        <!-- Checkbox select Datatable start -->

        <!-- Checkbox select Datatable End -->
        <!-- Export Datatable start -->

        <!-- Export Datatable End -->
    </div>
    <!-- <div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div> -->
    </div>
    </div>

    </div>
    <?php include "./layout/js.php" ?>
</body>

</html>
<!-- thong bao delete -->
<?php
if (isset($_GET['checkDelete']) && $_GET['checkDelete'] > 0) {
    $message = "Bạn đã xóa thành công";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else if (isset($_GET['checkUpdate']) && $_GET['checkUpdate'] > 0) {
    $message = "Bạn đã cập nhật thành công";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else if (isset($_GET['action']) && $_GET['action'] == "error_delete_exists") {
    $message = "Thể loại còn sách không thể xóa!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>