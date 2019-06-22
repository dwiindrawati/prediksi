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

                                    <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Merk</th>
                                                <th>Ram</th>
                                                <th>Vga</th>
                                                <th>Hdd</th>
                                                <th>Lcd</th>
                                                <th>Processor</th>
                                                <th>Rate</th>
                                                <th>Label</th>>
                                                <th>f(Ya)</th>
                                                <th>f(Tidak)</th>
                                                <th>Prediksi</th>
                                                <th>CM</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $TP=0;
                                            $TN=0;
                                            $FN=0;
                                            $FP=0;
                                            if($data != NULL){
                                                $c=0;
                                                foreach($rekomendasi['data_tabel'] as $data_tabel){
                                                        echo "<tr>";
                                                        echo    "<td>".++$c."</td>";
                                                        echo    "<td>".$data_tabel['merk']."</td>";
                                                        echo    "<td>".$data_tabel['ram']."</td>";
                                                        echo    "<td>".$data_tabel['vga']."</td>";
                                                        echo    "<td>".$data_tabel['hdd']."</td>";
                                                        echo    "<td>".$data_tabel['lcd']."</td>";
                                                        echo    "<td>".$data_tabel['processor']."</td>";
                                                        echo    "<td>".$data_tabel['rate']."</td>";
                                                        echo    "<td>".$data_tabel['rekomen']."</td>";
                                                        echo    "<td>".$rekomendasi['hasil'][$c-1]["YA"]."</td>";
                                                                     
                                                        echo    "<td>".$rekomendasi['hasil'][$c-1]["TIDAK"]."</td>";

                                                        echo    "<td>".$rekomendasi['hasil'][$c-1]["prediksi"]."</td>";


                                                        echo    "<td>".$rekomendasi['hasil'][$c-1]['confmatrix']."</td>";
                                                        echo "</tr>";                    
                                                    
                                                }
                                            }

                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                                
                                <div class="tab-pane fade active in" id="matrix-pills">
                                    <h4>Evaluasi dan Validasi</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <table width="100%" class="table table-bordered" id="tabel2">
                                                <tr>
                                                    <td colspan="4"><b>Confusion Matrix</b></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" rowspan="2" width="33%"></td>
                                                    <td colspan="2">Prediksi</td>
                                                </tr>
                                                <tr>
                                                    <td>Positif</td>
                                                    <td>Negatif</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">Kelas</td>
                                                    <td>Positif</td>
                                                    <td>TP : <?php echo $rekomendasi['confmatrix']['TP']; ?></td>
                                                    <td>FN : <?php echo $rekomendasi['confmatrix']['FN']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Negatif</td>
                                                    <td>FP : <?php echo $rekomendasi['confmatrix']['FP']; ?></td>
                                                    <td>TN : <?php echo $rekomendasi['confmatrix']['TN'];; ?></td>
                                                </tr>
                                            </table>                    
                                        </div>
                                        <div class="col-lg-6">
                                            <table width="100%" class="table table-bordered" id="tabel2">
                                                <tr>
                                                    <td colspan="2"><b>Performance Measures</b></td>
                                                </tr>
                                                <tr>
                                                    <td width="33%">recall</td>
                                                    <td> <?php echo round($rekomendasi['confmatrix']['recall']*100,2); ?>% </td>
                                                </tr>
                                                <tr>
                                                    <td>precision</td>
                                                    <td> <?php echo round($rekomendasi['confmatrix']['precision']*100,2); ?>% </td>
                                                </tr>
                                                <tr>
                                                    <td>accuracy</td>
                                                    <td> <?php echo round($rekomendasi['confmatrix']['accuracy']*100,2); ?>% </td>
                                                </tr>
                                                <tr>
                                                    <td>error rate</td>
                                                    <td><?php echo round($rekomendasi['confmatrix']['error_rate']*100,2); ?>% </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                   <!-- ning kene grafik -->       
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