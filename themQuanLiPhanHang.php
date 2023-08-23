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
            <div class="card-box mb-30">
            <div class="page-header">
                    <h3>Quản lý phân hàng</h3>
                    <p >Admin >          Quản lí phân hàng > <span style="font-weight: 1000;">Thêm</span></p>
                </div>
       
                <div class="pd-20">
                    <h4 class="text-blue h4">Danh sách đơn hàng (Đã phân hàng)</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Mã</th>
                                <th>Ngày</th>
                                <th>Khu vực</th>
                                <th>Kho</th>
                                <th>Trạng thái</th>
                                <th></th>
                      
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // for($i=0;$i<=count($arrayOb);$i++){
                            // 	if(!empty($arrayOb[$i])){


                            ?>
                            <tr>
                                <td class="table-plus"><?php //echo $arrayOb[$i]->getId()
                                                        ?></td>
                                <td><?php //echo $arrayOb[$i]->getTensach()
                                    ?></td>
                                <td><?php //echo $arrayOb[$i]->getTacgia()
                                    ?></td>
                                <td><?php //echo currency_format_d($arrayOb[$i]->getGia());
                                    ?></td>
                                <td><?php //echo $arrayOb[$i]->getMota()
                                    ?></td>
                               <td></td>
                              
                      
                            </tr>
                            <?php //}}
                            ?>

                        </tbody>
                    </table>
                </div>
              
            </div>
            <!-- Simple Datatable End -->
            <!-- multiple select row Datatable start -->

            <!-- multiple select row Datatable End -->
            <!-- Checkbox select Datatable start -->

            <!-- Checkbox select Datatable End -->
            <!-- Export Datatable start -->

            <!-- Export Datatable End -->
            <div class="page-header">
                    <h3>Thêm phân hàng</h3>
                    <p ><span style="font-weight: 1000;">Chọn khu vực,Kho*</span></p>

                    <form action="">
                        <select name="" id="">
                            <option value="">Select</option>
                        </select>
                    </form>
                   
                    <a  style="background-color: #1b00ff; margin-top: 30px;"class="btn btn-info">Thêm</a>
                    
                </div>
                </div>
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