<?php
include '../functions/kumpulan_fungsi.php';

include '../templeting/headerhtml.php';
include '../templeting/content.php';
include '../templeting/logo.php';
include '../templeting/contenthtml.php';
?>

    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Lapor Kejadian Kebakaran</a></li>
                            <li><a href="#"><i class="fa fa-file-image-o" aria-hidden="true"></i> Pictures</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="../kejadian/kejadian_simpan.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="longitude" placeholder="Longitude">
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-sticky-note" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="deskripsi_kejadian" placeholder="Deskripsi Kejadian">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="latitude" placeholder="Latitude">
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-camera" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="gambar" placeholder="Upload Gambar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Simpan
                                            </button>
                                            <a href="data_kejadian.php" class="btn btn-primary waves-effect waves-light m-r-10">Batal </a>
                                            
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include '../templeting/footer.php';
include '../templeting/footerhtml.php';
 ?>
