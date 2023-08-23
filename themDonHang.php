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
<?php


?>

<?php include "layout/head.php" ?>

<body>
    
    <?php include "./layout/pre-loader.php" ?>
    <?php include "./layout/header.php" ?>

    <?php include "./layout/right-sidebar.php" ?>

    <?php
    include "./layout/left_side_bar.php";
    ?>
    <?php
    $url = "http://awrazer.online/";
    ?>
    <!-- api khachhang -->
    <?php $chaa = require("init_curl.php");
    curl_setopt($chaa, CURLOPT_URL, $url . "khachhang/getallkhachhang");
    $reposnaa = curl_exec($chaa);
    curl_close($ch);
    $dataaa = json_decode($reposnaa, true); ?>
    
    <!-- Api don hang -->
    <?php $ch1 = require("init_curl.php");
    curl_setopt($ch1, CURLOPT_URL,  $url . "donhang/getall");
    $reposn1 = curl_exec($ch1);
    curl_close($ch1);
    $data1 = json_decode($reposn1, true); ?>
    <!-- Api kho -->
    <?php $chk = require("init_curl.php");
    curl_setopt($chk, CURLOPT_URL,  $url . "phieuchuyenkho/getallkho");
    $reposnk = curl_exec($chk);
    curl_close($chk);
    $datak = json_decode($reposnk, true); ?>
    <!-- Api trang thai -->
    <?php $chtt = require("init_curl.php");
    curl_setopt($chtt, CURLOPT_URL,  $url . "trangthai/getall");
    $reposntt = curl_exec($chtt);
    curl_close($chtt);
    $datatt = json_decode($reposntt, true); ?>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
        </div>
        <div class="card-box mb-30">
            <div class="page-header">
                <h3>Quản lý Đơn Hàng</h3>
                <p>Admin > Quản lí đơn hàng > <span style="font-weight: 1000;">Thêm</span></p>
            </div>


        </div>

        <div class="page-header">
            <h4 style="color: #1b00ff;">Thêm đơn hàng</h4>
            <div class="pd-20 card-box mb-30">
                <div class="pb-20 md-20">
                    <form method="post" action="./controler/addDonHang.php">
                        <div class="border border-dark">
                            <p class="text-primary">Người gửi</p>
                            <div class="row mx-2">
                                <div class="col-md-4">
                                    <label for="">Họ và tên</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Số điện thoại/ Người nhận</label>
                                </div>
                                <div class=" col-md-4">
                                    <label for="">Địa chỉ/ Người nhận</label>
                                </div>
                            </div>
                            <div class="row mx-2  mb-4">
                                <div class="col-md-4 mb-3">
                                    <select id="makh" name="makh" class="form-control">
                                        <?php
                                        foreach ($dataaa as $resk) {
                                        ?>
                                            <option value=<?php echo $resk["makh"] ?>><?php echo $resk["tenkh"] ?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" name="sodienthoai" id="sodienthoai">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" name="diachi" id="diachi">
                                </div>
                            </div>
                        </div>
                        <div class=" border border-dark mt-4">
                            <p class="text-primary">Thông tin kiện hàng</p>
                            <div class="row mx-2">
                                <div class="col-md-4">
                                    <label for="">Ghi chú</label>
                                </div>
                                <div class=" col-md-4">
                                    <label for="">Thể tích/ Khối lượng</label>
                                </div>
                            </div>
                            <div class="row mx-2  mb-4">
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" name="ghichu" id="ghichu" placeholder="Loai hang (dễ vỡ, chất lỏng,..)">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" id="khoiluong" name="khoiluong">
                                </div>

                            </div>
                            <div class=" row mx-2">
                                <div class="col-md-4">
                                    <label for="">Giá trị</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Ngày gửi</label>
                                </div>
                            </div>
                            <div class="row mx-2  mb-4">
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" name="giatridh" id="giatri" readonly >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="date" class="form-control" name="ngaytaodon" id="ngaytaodon" value="" >
                                </div>
                            </div>
                        </div>

                </div>

                <div class=" border border-dark mt-4">
                    <p class="text-primary">Khác</p>
                    <div class="row mx-2">
                        <div class="col-md-4">
                            <label for="">Người tạo đơn</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">Kho</label>
                        </div>
                        <div class=" col-md-4">
                            <label for="">Trạng thái</label>

                        </div>
                    </div>
                    <div class="row mx-2  mb-4">
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['tennhanvien'] ?>" readonly>
                            <input type="hidden" class="form-control" name="manv" id="manv" value="<?php echo  $_SESSION['manhanvien']; ?>" >
                        </div>
                        <div class="col-md-4 mb-3">
                            <select id="mak" name="mak" class="form-control">
                                <?php
                                foreach ($datak as $resk) {

                                ?>
                                    <option value=<?php echo $resk["mak"] ?>><?php echo $resk["tenk"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class=" col-md-4 mb-3">
                            <select id="idtrangthai" name="idtrangthai" class="form-control">
                                <?php
                                foreach ($datatt as $restt) {

                                ?>
                                    <option value=<?php echo $restt["idtrangthai"] ?>><?php echo $restt["tentrangthai"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                </div>
                <div class=" col-md-4 mt-4">
                    <button type="submit" class="btn btn-info" style="width: 120px;">Thêm</button>
                </div>
            </div>

        </div>


        </form>
    </div>
    </div>
    <?php include "./layout/js.php" ?>
    <script>
        const tt =  document.getElementById('khoiluong');
        const gt = document.getElementById('giatri');
        tt.addEventListener('input', function(event) {
            gt.value = event.target.value*200;
            gt.value = gt.value+" vnd";
        });
    </script>
</body>

</html>



<?php
if (isset($_GET['checkDelete']) && $_GET['checkDelete'] > 0) {
    $message = "Bạn đã xóa thành công";
    echo "<script type='text/javascript'>alert('$message');</>";
} else if (isset($_GET['checkUpdate']) && $_GET['checkUpdate'] > 0) {
    $message = "Bạn đã cập nhật thành công";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else if (isset($_GET['action']) && $_GET['action'] == "error_delete_exists") {
    $message = "Thể loại còn sách không thể xóa!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>