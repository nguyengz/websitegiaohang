<!-- Thêm phiếu -->
<?php
$nguoilapphieu = $_GET['nguoilapphieu'];
$ngaylapphieu = $_GET['ngaylapphieu'];
$nguoinhan = $_GET['nguoinhan'];
$shipper = $_GET['shipper'];

echo "http://localhost:3000/phieugiaohang/addphieugiaohang?ngaylapphieu=$ngaylapphieu&nguoinhan=$nguoinhan&nguoilapphieu=$nguoilapphieu&shipper=$shipper";
$chk = require("../init_curl.php");
curl_setopt($chk, CURLOPT_URL, "http://localhost:3000/phieugiaohang/addphieugiaohang?ngaylapphieu=$ngaylapphieu&nguoinhan=$nguoinhan&nguoilapphieu=$nguoilapphieu&shipper=$shipper");
$reposnk = curl_exec($chk);
$status_code = curl_getinfo($chk, CURLINFO_RESPONSE_CODE);
curl_close($chk);
$datak = json_decode($reposnk, true);
var_dump($datak);
if ($status_code == 200) {
    // header('Location: ../themPhieuChuyenKho.php?success=1');
    // if (isset($_GET['success']) && $_GET['success'] == 1) {

    //     echo '<script >';
    //     echo 'alert(" Thêm thành công ")';
    //     echo '</script>';
    // }
    echo '<script >';
    header('Location: ../themPhieuGiaoHang.php');
    echo '</script>';
    echo '<script >';
    echo 'alert(" Thêm thành công ")';
    echo '</script>';
}

?>