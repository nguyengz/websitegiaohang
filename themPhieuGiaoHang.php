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
<link rel="stylesheet" type="text/css" href="./style.css" />

<body>

    <!-- Api nhan vien -->
    <?php $ch = require("init_curl.php");
    curl_setopt($ch, CURLOPT_URL, "http://localhost:3000/nhanvien/getallnhanvien");
    $reposn = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($reposn, true); ?>
    <!-- Api don hang -->
    <?php $ch1 = require("init_curl.php");
    curl_setopt($ch1, CURLOPT_URL, "http://localhost:3000/donhang/getall");
    $reposn1 = curl_exec($ch1);
    curl_close($ch1);
    $data1 = json_decode($reposn1, true); ?>
    <!-- Api kho -->
    <?php $chk = require("init_curl.php");
    curl_setopt($chk, CURLOPT_URL, "http://localhost:3000/phieuchuyenkho/getallkho");
    $reposnk = curl_exec($chk);
    curl_close($chk);
    $datak = json_decode($reposnk, true); ?>
    <?php include "./layout/pre-loader.php" ?>
    <?php include "./layout/header.php" ?>

    <?php include "./layout/right-sidebar.php" ?>

    <?php
    include "./layout/left_side_bar.php";
    ?>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="">
                <div class="page-header mb-4">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item">
                                        <a href="quanLiXuatHang.php">Quản lí Xuất hàng</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a href="" class="text-primary">Thêm phiếu Giao hàng</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                    <div class="row  pt-10">
                        <div class="col-md-6 col-sm-12 ">
                            <a href="./quanLiXuatHang.php   " class="btn btn-info">Quay lại</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="min-height-200px">
                <!-- dsbook -->
                <div class="card-box mb-20 ">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Thêm phiếu giao hàng</h4>
                    </div>
                    <div class="pb-20 md-20">
                        <form method="get" action="./controler/addPhieuGiaoHang.php">
                            <div class="row mx-2">
                                <div class="col-md-4">
                                    <label for="">Người lập phiếu</label>

                                </div>
                                <div class="col-md-4">
                                    <label for="">Ngày lập phiếu</label>

                                </div>

                            </div>
                            <div class="row mx-2  mb-4">
                                <div class="col-md-4 mb-3">
                                    <select name="nguoilapphieu" id="nguoilapphieu" class="form-control">
                                        <?php
                                        foreach ($data as $res) {

                                        ?>
                                            <option value=<?php echo $res["manv"] ?>><?php echo $res["tennv"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="date" class="form-control" id="ngaylapphieu" name="ngaylapphieu" value="date">
                                </div>

                            </div>
                            <div class=" row mx-2">
                                <div class="col-md-4">
                                    <label for="">Kho gửi</label>

                                </div>
                                <div class="col-md-4">
                                    <label for="">Shipper</label>

                                </div>
                            </div>
                            <div class=" row row mx-2 mb-4">
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" id="nguoinhan" name="nguoinhan" value="">
                                </div>
                                <div class=" col-md-4 mb-3">
                                    <input type="text" class="form-control" name="shipper">
                                </div>
                                <div class=" col-md-4">
                                    <!-- <input type="submit" class="btn btn-info" name="" value="Thêm phiếu"> -->
                                    <button type="submit" class="btn btn-info">Thêm phiếu</button>
                                    <!-- <button type="submit"></button>
                                        <a href="./addBookPage.php" class="btn btn-info" style="width: 120px;">Thêm hàng</a>
                                        <a href="./addBookPage.php" class="btn btn-info" style="width: 120px;">Lập phiếu</a> -->
                                </div>
                            </div>
                        </form>

                    </div>


                </div>
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Danh sách đơn hàng</h4>
                    </div>
                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort ">Mã</th>
                                    <th>KLượng/TTích</th>
                                    <th>Ghi chú</th>
                                    <th>Giá trị </th>
                                    <th>Địa chỉ nhận</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data1 as $res1) {

                                ?>
                                    <tr>
                                        <td class="table-plus"><?php echo $res1["madh"]
                                                                ?></td>
                                        <td><?php echo $res1["khoiluong"]
                                            ?></td>
                                        <td><?php echo $res1["ghichu"]
                                            ?>
                                            ?></td>
                                        <td><?php echo $res1["giaitridh"]
                                            ?></td>
                                        <td>
                                            <?php echo $res1["diachi"]
                                            ?>
                                        </td>

                                        <td>
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </td>
                                    </tr>
                                <?php }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="page-header">
                        <a href="" class="btn btn-info mx-4" style="width:100px;">Xóa</a>
                    </div>
                </div>

            </div>

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