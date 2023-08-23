<!-- Thêm phiếu -->
<?php
 
if (isset($_GET['chk_madh'])) {
    $madh = $_GET['chk_madh'];
    foreach ($madh as $id) {
        $url = "http://awrazer.online/donhang/deletedonhang?madh=$id";
        $chk = require("init_curl.php");
        curl_setopt($chk, CURLOPT_URL, $url);
        $reposnk = curl_exec($chk);
        $status_code = curl_getinfo($chk, CURLINFO_RESPONSE_CODE);
        curl_close($chk);
        $datak = json_decode($reposnk, true);
    }
    // var_dump($status_code);
    var_dump($datak);
    if ($status_code == 200) {
        $msg = "Deleted Successfully!";
        echo '<script src="js/jquery-1.10.2.js">';
        echo '</script>';
        echo '<script type="text/javascript">';
        echo "alert('$msg')";
        echo '</script>';
    }
}

?>