<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Pembelian</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('template_admin/css/bootstrap.min.css');?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('template_admin/css/metisMenu.min.css');?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('template_admin/css/timeline.css');?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('template_admin/css/startmin.css');?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('template_admin/css/morris.css');?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('template_admin/css/font-awesome.min.css');?>" rel="stylesheet">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

</body>

            <?php echo $header_admin; ?> 
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pembelian</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <!-- <a href="<?php echo base_url()."C_produk/form_add_produk"?>">
                                    <button type="button" class="btn btn-default">Tambah Produk</button>
                                </a> -->
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                           <tr>
                                               
                                                <th>Id Beli</th>
                                                <th>Id User </th>
                                                <th>Nama User</th>
                                                <th>Tanggal Beli </th>
                                                <th>Tanggal bayar </th>
                                                <th>Total</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Verifikasi Pembayaran </th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($data as $datatabel) { ?>
                                        <tbody>
                                                <tr>
                                                    <td><?php echo $datatabel['id_beli']; ?></td>
                                                    <td><?php echo $datatabel['id_user']; ?></td>
                                                    <td><?php echo $datatabel['nama_user']; ?></td>
                                                    <td><?php echo $datatabel['tanggal_beli']; ?></td>
                                                    <td><?php echo $datatabel['tanggal_bayar']; ?></td>
                                                    <td><?php echo $datatabel['total_harga']; ?></td>
                                                    <td><img src="<?php echo base_url()."gambar_upload/".$datatabel['upload_bukti'];?>" style=" width:150px; height:100px""></td>
                                                    <td>
                                                         <a href="<?php echo base_url()."C_pembayaran/verfi_bayar/".$datatabel['id_beli'];?>">
                                                            <font color="green"> 
                                                            <i class="fa fa-check"></i>
                                                            Verifikasi Pembayaran
                                                            </font>
                                                         </a>
                                                    </td>
                                                </tr>
                                        </tbody>
                                        <?php  } ?>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->



         <!-- jQuery -->
        <script src="<?php echo base_url()."template_admin" ?>/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url()."template_admin" ?>/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url()."template_admin" ?>/js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="<?php echo base_url()."template_admin" ?>/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()."template_admin" ?>/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url()."template_admin" ?>/js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
