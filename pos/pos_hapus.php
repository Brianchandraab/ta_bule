<?php

//session_start();
require '../functions/kumpulan_fungsi.php';
//authentication();
$id_pos = $_GET['id'];
//var_dump($id_pos);
//die;
$kon = koneksi_db();

//$id_pelapor= isset($_REQUEST['id_pos']) ? $_REQUEST['id_pos'] : 0;

$query=  mysqli_query($kon,"DELETE FROM pos WHERE id_pos='$id_pos'");

if ($query) {
    flash('pos', '<b> Success - </b>Data berhasil dihapus...', 'alert alert-bordered alert-success');
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            window.location.href='../web/data_pos.php';
        </script>
    ";
} else {
    flash('pos', '<b> Fail - </b>Data gagal dihapus...', 'alert alert-bordered alert-danger');
    echo"
        <script>
            alert('Data Gagal Dihapus');
            window.location.href='../web/data_pos.php';
        </script>
    ";
}