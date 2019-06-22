<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>NBC</title>
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
                        <h1 class="page-header">NBC</h1>
                        <br>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form method ="post" action="<?php echo base_url()."C_nbc/cek_prediksi" ;?>" role="form" enctype="multipart/form-data">
                                        <div class="form-group">
                                                <label>Merk</label>
                                                <input class="form-control" placeholder="Masukan Merk" required name="merk">
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
                                                    <option value="1">ADA</option>
                                                    <option value="2">TIdak ADA</option>
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
                                            <label>Rate</label>
                                             <select name="rate" class="form-control">
                                                    <option>Pilih Processor</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Cek Prediksi</button>
                                    </form>
                                        <!-- <?php 
                                            if ($_POST['merk']=='acer'){
                                                $merk=1;
                                            }
                                            elseif ($_POST['merk']=='asus') {
                                                $merk=2;
                                            }
                                            elseif ($_POST['merk']=='dell') {
                                                $merk=3;
                                            }
                                            elseif ($_POST['merk']=='hp') {
                                                $merk=4;
                                            }
                                            elseif ($_POST['merk']=='lenovo') {
                                                $merk=5;
                                            }
                                            elseif ($_POST['merk']=='toshiba') {
                                                $merk=6;
                                            }
                                            $prediksi= (compare($merk,$_POST['ram'],$_POST['vga'],$_POST['hdd'],$_POST['lcd'],$_POST['processor'],$_POST['rate'],$avg,$std) == 1 ? "P":"TP") ;

                                            echo "<br><b>PREDIKSI REKOMENDASI : </b>".($prediksi=="P" ? "YA" : "TIDAK");                           
                                            ?> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<script>
    $(document).ready(function() {    
      $('.nav-tabs a[href="#tabel-pills"]').tab('show');
      $('.nav-tabs a[href="#matrix-pills"]').tab('show');
      $('.nav-tabs a[href="#tabel-pills"]').tab('show');
    });
</script>
<!-- /.row -->
<script>
    $(function() {

    Morris.Bar({
        element: 'morris-bar-chart1',
        data: [{
            y: 'TP',
            jumlah: <?php echo $TP; ?>,
        }, {
            y: 'TN',
            jumlah: <?php echo $TN; ?>,
        }, {
            y: 'FP',
            jumlah: <?php echo $FP; ?>,
        }, {
            y: 'FN',
            jumlah: <?php echo $FN; ?>,
        }
        ],
        xkey: 'y',
        ykeys: ['jumlah'],
        labels: ['jumlah'],
        hideHover: 'auto',
        resize: true
    });
   Morris.Bar({
        element: 'morris-bar-chart2',
        data: [{
            y: 'RC',
            jumlah: <?php echo $recall*100; ?>,
        }, {
            y: 'PC',
            jumlah: <?php echo $precision*100; ?>,
        }, {
            y: 'AC',
            jumlah: <?php echo $accuracy*100; ?>,
        }, {
            y: 'ER',
            jumlah: <?php echo $error_rate*100; ?>,
        }
        ],
        xkey: 'y',
        ykeys: ['jumlah'],
        labels: ['jumlah'],
        hideHover: 'auto',
        resize: true
    });
});
</script>