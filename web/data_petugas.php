<?php
//session_start();
require '../functions/kumpulan_fungsi.php';
//authentication();
$kon = koneksi_db();
$query = mysqli_query($kon, "SELECT * FROM `petugas`  
ORDER BY `petugas`.`id_petugas`  DESC");

include '../templeting/headerhtml.php';
include '../templeting/content.php';
include '../templeting/logo.php';
include '../templeting/contenthtml.php';
?>

<!-- Static Table Start -->
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Data</span> Petugas</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                   data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>

                                        <th data-field="id">No</th>
                                        <th data-field="company" data-editable="true">No Induk Petugas</th>
                                        <th data-field="price" data-editable="true">Nama Petugas</th>
                                        <th data-field="date" data-editable="true">ID Pos</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($result = mysqli_fetch_object($query)) {
                                        ?>
                                        <tr>

                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $result->no_induk_pegawai ?></td>
                                            <td><?php echo $result->nama_petugas ?></td>
                                            <td><?php echo $result->id_pos ?></td>
                                            <td>
                                                            <a href="petugas_ubah.php?id=<?= $result->id_petugas; ?>"
                                                               class="btn btn-outline-primary btn-sm mg-r-5"><div><i class="fa fa-pencil"></i></div></a>
                                                               <a href="../petugas/petugas_hapus.php?id=<?= $result->id_petugas; ?>"
                                                               onclick="return confirm('Anda yakin akan menghapus <?php echo $result->nama_petugas ?>?')"
                                                               class="btn btn-outline-danger btn-sm mg-r-5"><div><i class="fa fa-trash-o"></i></div></a>
                                                        </td>
                                        </tr>
                                                <?php
                                                }
                                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->

    <?php
    include '../templeting/footer.php';
    include '../templeting/footerhtml.php';
    ?>
