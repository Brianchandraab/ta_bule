<?php

//session_start();
include '../functions/kumpulan_fungsi.php';
$id_user = $_GET['id'];
//var_dump($id_user);
//die;
$kon = koneksi_db();

// $id_pelapor= isset($_REQUEST['id_pelapor']) ? $_REQUEST['id_pelapor'] : 0;

$query=  mysqli_query($kon, "DELETE FROM user WHERE id_user='$id_user'");

if ($query) {
    flash('kejadian', '<b> Success - </b>Data Berhasil Dihapus...', 'alert alert-bordered alert-success');
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            window.location.href='data_user.php';
        </script>
    ";
} else {
    flash('kejadian', '<b> Fail - </b>Data Gagal Dihapus...', 'alert alert-bordered alert-danger');
    echo"
        <script>
            alert('Data Gagal Dihapus');
            window.location.href='data_user.php';
        </script>
    ";
}