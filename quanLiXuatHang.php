<?php
session_start();
?>
<!DOCTYPE html>
<html>

<?php include "layout/head.php" ?>

<body>

    <!-- Phieu chuyen kho -->
    <?php
 
    
    $ch = require("init_curl.php");
    curl_setopt($ch, CURLOPT_URL, "http://awrazer.online/phieuchuyenkho/getallphieuchuyenkho");
    $reposn = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($reposn, true);
    //var_dump($data);
    ?>
    <?php include "./layout/pre-loader.php" ?>
    <?php include "./layout/header.php" ?>

    <?php include "./layout/right-sidebar.php" ?>

    <?php
    include "./layout/left_side_bar.php";
    ?>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- dsbook -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Phiếu xuất qua kho mới</h4>
                    </div>
                    <?php if (isset($_GET['msg'])) { ?>
                        <!-- <p class="alert alert-success alert-autocloseable-success"><?php echo $_GET['msg']; ?></p> -->
                    <?php }
                    ?>
                    <form method="get" action="./controler/delectedPhieuCk.php">
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr>
                                        <th class="table-plus datatable-nosort">Mã</th>
                                        <th>Ngày</th>
                                        <th>Kho gửi</th>
                                        <th>Kho đến</th>
                                      
                                        <th>Số xe</th>
                                        <th><input id="chk_all" name="chk_all" type="checkbox" /></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(is_array($data))
                                    foreach ($data as $res) {
                                    ?>
                                        <tr>
                                            <td class="table-plus"><?php
                                                                    echo $res["mack"]
                                                                    ?></td>
                                            <td><?php echo $res["ngaylapphieu"];
                                                ?></td>
                                            <td><?php echo $res["makhogui"];
                                                ?></td>
                                            <td><?php echo $res["makhogui"];
                                                ?></td>
                                     
                                            <td>
                                                <?php echo $res["soxe"];
                                                ?>
                                            </td>
                                            <td>
                                                <input type="checkbox" id="check" name="chk_mack[]" class='chkbox' value="<?php
                                                                                                                            echo $res["mack"]
                                                                                                                            ?>" style="border-radius: 10%;">
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="page-header">
                            <a href="themPhieuChuyenKho.php" class="btn btn-info">Thêm</a>
                            <button type="submit" class="btn btn-info">Xóa</button>
                            <!-- <a href="./addBookPage.php" class="btn btn-info">Sửa</a>
                     <a href="./addBookPage.php" class="btn btn-info">Xóa</a> -->
                        </div>
                    </form>

                </div>


            </div>
            <!-- Phieu giao hang -->
            <?php
            $ch1 = require("init_curl.php");
            curl_setopt($ch1, CURLOPT_URL, "http://awrazer.online/phieugiaohang/getallphieugiaohang");
            $reposn1 = curl_exec($ch1);
            curl_close($ch1);
            $data1 = json_decode($reposn1, true);
            //var_dump($data);
            ?>
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Đơn hàng xuất đến khách hàng</h4>
                </div>
                <form method="get" action="./controler/delectedPhieuGh.php">
                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Mã</th>
                                    <th>Ngày</th>

                                    <th>Người lập phiếu</th>
                    
                                    <th>Nhân viên giao hàng</th>
                                    <!-- <th>Trạng thái</th> -->
                                    <th><input id="chk_all1" name="chk_all1" type="checkbox" /></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data1 as $res1) {

                                ?>
                                    <tr>
                                        <td class="table-plus"><?php echo $res1["magh"];
                                                                ?></td>
                                        <td><?php echo $res1["ngaylapphieu"];
                                            ?></td>
                                        
                                        <td><?php echo $res1["magh"];
                                            ?></td>
                                         
                                        <td>
                                            <?php echo $res1["tennv"];
                                            ?></td>
                                        
                                        <td>
                                            <input type="checkbox" id="check" name="chk_magh[]" class='chkbox1' value="<?php
                                                                                                                        echo $res1["magh"]
                                                                                                                        ?>" style="border-radius: 10%;">
                                        </td>
                                    </tr>
                                <?php }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="page-header">
                        <a href="./themPhieuGiaoHang.php" class="btn btn-info">Thêm</a>
                        <button type="submit" class="btn btn-info">Xóa</button>
                        <!-- <a href="" class="btn btn-info">Xóa</a> -->
                        <!-- <a href="" class="btn btn-info">Sửa</a> -->
                    </div>
                </form>

            </div>

        </div>
    </div>
    </div>

    </div>
    <?php include "./layout/js.php" ?>
</body>

</html>
<script src="js/jquery-1.10.2.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#chk_all').click(function() {
            if (this.checked)
                $(".chkbox").prop("checked", true);
            else
                $(".chkbox").prop("checked", false);
        });
    });
    $(document).ready(function() {
        $('#chk_all1').click(function() {
            if (this.checked)
                $(".chkbox1").prop("checked", true);
            else
                $(".chkbox1").prop("checked", false);
        });
    });
    $(document).ready(function() {
        $('#delete_form').submit(function(e) {
            if (!confirm("Confirm Delete?")) {
                e.preventDefault();
            }
        });
    });
</script>
<!-- thong bao delete -->
<?php
// if (isset($_GET['checkDelete']) && $_GET['checkDelete'] > 0) {
//     $message = "Bạn đã xóa thành công";
//     echo "<script type='text/javascript'>alert('$message');</script>";
// } else if (isset($_GET['checkUpdate']) && $_GET['checkUpdate'] > 0) {
//     $message = "Bạn đã cập nhật thành công";
//     echo "<script type='text/javascript'>alert('$message');</script>";
// } else if (isset($_GET['action']) && $_GET['action'] == "error_delete_exists") {
//     $message = "Thể loại còn sách không thể xóa!";
//     echo "<script type='text/javascript'>alert('$message');</script>";
// }

?>