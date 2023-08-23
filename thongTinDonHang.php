<?php
// session_start();
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
        


            </div>
            <div class="card-box mb-30" style="padding-bottom: 300px;">
            <div class="page-header">
                    <h3>Xem thông tin đơn hàng</h3>
                    <p >Admin >          Quản lí đơn hàng >           <span style="font-weight: 1000;">Xem thông tin đơn hàng</span></p>
                </div>
            <div class="page-header">
                    <a style="background-color: #1b00ff;" href="./themPhieuGiaoHang.php" class="btn btn-info">Thêm</a>
                    
                </div>
                <div class="pd-20" style="margin-bottom: 70px;">
                    <a href="quanLiDonHang.php"><h4 class="text-blue h4"> <i class="bi bi-arrow-left"></i>Trở lại</h4></a>
                </div>
                <div style="border-top:solid 1px;border-bottom:solid 1px">
                <div style="display: flex; justify-content:space-between; padding:10px">
                    <div style="display: flex;">
                        <div style="margin-left: 30px ; width:100px; height: 100px; background-color:#ccc;">Ảnh</div>
                        <div style="margin-left: 20px;">
                            <div>Tên hàng</div>
                            <div>Địa chỉ</div>
                        </div>
                    </div>
                    <div style="margin-right: 10px;">
                        Giá tiền
                        <a href="chiTietDonHang.php"><div style="margin-top: 45px;font-weight: 1000;  ">Xem chi tiết > </div></a>
                    </div>
                </div>
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