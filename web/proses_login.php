<?php

session_start();
include 'kumpulan_fungsi.php';
$kon = koneksi_db();

$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : null;
$pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;

if (empty($username) || empty($pass) || empty($name)) {
    ?>
    <script>
        alert('Halaman Tidak Ditemukan!');
        window.location.href = "index.php";
    </script>
    <?php

    exit;
}

//echo "usernm : $username pass : $pass";

$quser = mysqli_query($kon, "select * from admin where username = '$username', password ='$pass and name ='$name'");
if (mysqli_num_rows($quser)) {
    $_SESSION['sudah_login'] = TRUE;
    ?>
    <script>
        alert('Anda Berhasil Masuk!');
        window.location.href = "index.php";
    </script>
    <?php

} else {
    ?>
    <script>
        alert('Anda Gagal Masuk!');
        window.location.href = "login.php";
    </script>
    <?php

}