<!-- Thêm phiếu -->
<?php
$a = ($_POST);
$ch = require("../init_curl.php");
curl_setopt($ch, CURLOPT_URL, "http://awrazer.online/donhang/adddonhang");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($a));
$headers = array(
    'Content-Type: application/x-www-form-urlencoded'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$reposn = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
curl_close($ch);
$data = json_decode($reposn, true);
var_dump($data);
if ($status_code == 200) {
    // header('Location: ../themPhieuChuyenKho.php?success=1');
    // if (isset($_GET['success']) && $_GET['success'] == 1) {

    //     echo '<script >';
    //     echo 'alert(" Thêm thành công ")';
    //     echo '</script>';
    // }
    echo '<script >';
    echo 'alert(" Thêm thành công ")';
    // header('Location: ../themDonHang.php');
    echo '</script>';
    header('Location: ../themDonHang.php');
}
?>