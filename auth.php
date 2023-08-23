<?php
session_start();
if (!isset($_SESSION['sdt_nhanvien'])) {
    header("Location: SignIn.php");
    exit();
}
