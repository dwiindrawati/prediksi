<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Form Produk</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url()."template_admin/"; ?>/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url()."template_admin/"; ?>/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url()."template_admin/"; ?>/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url()."template_admin/"; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">


         <!-- Script TinyMCE -->
        <script src="<?php echo base_url()."template_admin/"; ?>tinymce/js/tinymce/tinymce.dev.js"></script>
        <script src="<?php echo base_url()."template_admin/"; ?>tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
        <script src="<?php echo base_url()."template_admin/"; ?>tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
        <script src="<?php echo base_url()."template_admin/"; ?>tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
        <!-- End Script TinyMCE -->


    </head>

</body>

            <?php echo $header_admin; ?> 
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Form Produk</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <?php require_once('tinymce.php'); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tambahkan Produk
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form method ="post" action="<?php echo base_url()."C_produk/add_produk" ;?>" role="form" enctype="multipart/form-data">
                                        <div class="form-group">
                                                <label>Merk</label>
                                                <input class="form-control" placeholder="Masukan Merk" required name="merk">
                                        </div>
                                        <div class="form-group">
                                                <label>Type</label>
                                                <input class="form-control" placeholder="Masukan Type" required name="type">
                                        </div>
                                        <div class="form-group">
                                                <label>Ram</label>
                                                <select name="ram" class="form-control">
                                                    <option>Pilih Ram</option>
                                                    <option value="2">2</option>
                                                    <option value="4">4</option>
                                                    <option value="8">8</option>
                                                    <option value="16">16</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                <label>HDD</label>
                                                <select name="hdd" class="form-control">
                                                    <option>Pilih HDD</option>
                                                    <option value="320">320</option>
                                                    <option value="500">500</option>
                                                    <option value="750">750</option>
                                                    <option value="1000">1000</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                <label>VGA</label>
                                                <select name="vga" class="form-control">
                                                    <option>Pilih VGA</option>
                                                    <option value="1">ON BOARD</option>
                                                    <option value="0">NON BOARD</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                <label>LCD</label>
                                                <select name="lcd" class="form-control">
                                                    <option>Pilih LCD</option>
                                                    <option value="11">11</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Processor</label>
                                             <select name="processor" class="form-control">
                                                    <option>Pilih Processor</option>
                                                    <option value="1">DUAL CORE / AMD</option>
                                                    <option value="2">I3 INTEL / 4 CORE AMD</option>
                                                    <option value="3">I5 INTEL / 6 CORE AMD</option>
                                                    <option value="4">I7 INTEL / 8 CORE AMD</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" placeholder="Masukan Harga (Rupiah)" name="harga" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Kuantitas</label>
                                            <input class="form-control" placeholder="Masukan Jumlah Stok" name="kuantitas" required="">
                                        </div>
                                        <div class="form-group">
                                                <label>Upload Gambar</label>
                                                <input type="file" name="berkas">
                                        </div>
                                        <div class=" form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Tambah Produk</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /#page-wrapper -->




       <!-- jQuery -->
        <script src="<?php echo base_url()."template_admin"; ?>/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url()."template_admin"; ?>/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url()."template_admin"; ?>/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url()."template_admin"; ?>/js/startmin.js"></script>

    </body>
</html>
