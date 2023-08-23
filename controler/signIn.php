<?php
if (isset($_GET['sdt'])) {
    $sdt = $_GET['sdt'];
    $pass = $_GET['password'];
    // echo "http://localhost:3000/phieuchuyenkho/addphieuchuyenkho?ngaylapphieu=$ngaylapphieu&makhogui=$makhogui&nguoilapphieu=$nguoilapphieu&soxe=$soxe&makhoden=$makhoden";
    $chk = require("init_curl.php");
    curl_setopt($chk, CURLOPT_URL, "https://awrazer.online/nhanvien/getallnhanvien?sdt=$sdt&pass=$pass");
    $reposnk = curl_exec($chk);
    $status_code = curl_getinfo($chk, CURLINFO_RESPONSE_CODE);
    curl_close($chk);
    $datak = json_decode($reposnk, true);
    foreach ($datak as $data) {
        $tennv = $data["tennv"];
    }
    // var_dump($tennv);
    // var_dump($datak);
    // echo $_SESSION['sdt'] = $sdt;
    if ($status_code == 200) {
        if (is_array($datak)) {
            if (count($datak) > 0) {
                $_SESSION['sdt_nhanvien'] = $sdt;
                $_SESSION['tennhanvien'] = $tennv;
                echo '<script >';
                header('Location: index.php');
                echo '</script>';
            } else {
                // echo '<script >';
                // echo  header('Location: SignIn.php');;
                // echo '</script>';if (!isset($_SESSION['sdt_nhanvien'])) {
                //     // echo $_SESSION['sdt_nhanvien'];
                echo '<script >';
                echo 'alert(" Sai tài khoản hoặc mật khẩu!")';
                echo '</script>';
            }
        }
    }
    // echo '<script >';
    // echo 'alert(" Thêm thành công ")';
    // header('Location: ../index.php');
    // echo '</script>';
    // header('Location: ../themPhieuChuyenKho.php');
}
