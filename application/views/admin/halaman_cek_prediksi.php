<?php 
    $training = $data_training;
        if($training != NULL) {
            $sum_merk_rekomen           = 0;
            $sum_ram_rekomen            = 0;
            $sum_vga_rekomen            = 0;
            $sum_hdd_rekomen            = 0;
            $sum_lcd_rekomen            = 0;
            $sum_processor_rekomen      = 0;
            $sum_rate_rekomen           = 0;

            $sum_merk_tidakrekomen          = 0;
            $sum_ram_tidakrekomen           = 0;
            $sum_vga_tidakrekomen           = 0;
            $sum_hdd_tidakrekomen           = 0;
            $sum_lcd_tidakrekomen           = 0;
            $sum_processor_tidakrekomen     = 0;
            $sum_rate_tidakrekomen          = 0;


            $n_rekomen  = 0;
            $n_tidakrekomen     = 0;
            $n_data             = 0;

            //menjumlah data total biasa
            foreach ($training as $train){
                if($train['rekomen'] == "YA"){
                    $n_rekomen++;                           
                    $sum_merk_rekomen           = $train['merk'];
                    $sum_ram_rekomen            = $train['ram'];
                    $sum_vga_rekomen            = $train['vga'];
                    $sum_hdd_rekomen            = $train['hdd'];
                    $sum_lcd_rekomen            = $train['lcd'];
                    $sum_processor_rekomen      = $train['processor'];
                    $sum_rate_rekomen           = $train['rate'];
                }
                else if($train['rekomen'] == "TIDAK"){
                    $n_tidakrekomen++;  
                    $sum_merk_tidakrekomen          = $train['merk'];
                    $sum_ram_tidakrekomen           = $train['ram'];
                    $sum_vga_tidakrekomen           = $train['vga'];
                    $sum_hdd_tidakrekomen           = $train['hdd'];
                    $sum_lcd_tidakrekomen           = $train['lcd'];
                    $sum_processor_tidakrekomen     = $train['processor'];
                    $sum_rate_tidakrekomen          = $train['rate'];
                }
                $n_data++;
            }

            //rata-rata
            $u_merk_rekomen         = $sum_merk_rekomen/$n_rekomen;
            $u_ram_rekomen          = $sum_ram_rekomen/$n_rekomen;
            $u_vga_rekomen          = $sum_vga_rekomen/$n_rekomen;
            $u_hdd_rekomen          = $sum_hdd_rekomen/$n_rekomen;
            $u_lcd_rekomen          = $sum_lcd_rekomen/$n_rekomen ;
            $u_processor_rekomen    = $sum_lcd_rekomen/$n_rekomen ;
            $u_rate_rekomen         = $sum_rate_rekomen/$n_rekomen;

            $u_merk_tidakrekomen        = $sum_merk_tidakrekomen/$n_tidakrekomen;
            $u_ram_tidakrekomen         = $sum_ram_tidakrekomen/$n_tidakrekomen;
            $u_vga_tidakrekomen         = $sum_vga_tidakrekomen/$n_tidakrekomen;
            $u_hdd_tidakrekomen         = $sum_hdd_tidakrekomen/$n_tidakrekomen;
            $u_lcd_tidakrekomen         = $sum_lcd_tidakrekomen/$n_tidakrekomen;
            $u_processor_tidakrekomen   = $sum_processor_tidakrekomen/$n_tidakrekomen;
            $u_rate_tidakrekomen        = $sum_rate_tidakrekomen/$n_tidakrekomen;

            $sum2_merk_rekomen          = 0;
            $sum2_ram_rekomen           = 0;
            $sum2_vga_rekomen           = 0;
            $sum2_hdd_rekomen           = 0;
            $sum2_lcd_rekomen           = 0;
            $sum2_processor_rekomen     = 0;
            $sum2_rate_rekomen          = 0;

            $sum2_merk_tidakrekomen         = 0;
            $sum2_ram_tidakrekomen          = 0;
            $sum2_vga_tidakrekomen          = 0;
            $sum2_hdd_tidakrekomen          = 0;
            $sum2_lcd_tidakrekomen          = 0;
            $sum2_processor_tidakrekomen    = 0;
            $sum2_rate_tidakrekomen         = 0;

            //sum untuk standart deviasi
            foreach ($training as $train){
                if($train['rekomen'] == "YA"){
                    $sum2_merk_rekomen          += pow($train['merk']-$u_merk_rekomen,2);
                    $sum2_ram_rekomen           += pow($train['ram']-$u_ram_rekomen,2);
                    $sum2_vga_rekomen           += pow($train['vga']-$u_vga_rekomen,2);
                    $sum2_hdd_rekomen           += pow($train['hdd']-$u_hdd_rekomen,2);
                    $sum2_lcd_rekomen           += pow($train['lcd']-$u_lcd_rekomen,2);
                    $sum2_processor_rekomen     += pow($train['processor']-$u_processor_rekomen,2);
                    $sum2_rate_rekomen          += pow($train['rate']-$u_rate_rekomen,2);
                }
                else if($train['rekomen'] == "TIDAK"){
                    $sum2_merk_tidakrekomen         += pow($train['merk']-$u_merk_tidakrekomen,2);
                    $sum2_ram_tidakrekomen          += pow($train['ram']-$u_ram_tidakrekomen,2);
                    $sum2_vga_tidakrekomen          += pow($train['vga']-$u_vga_tidakrekomen,2);
                    $sum2_hdd_tidakrekomen          += pow($train['hdd']-$u_hdd_tidakrekomen,2);
                    $sum2_lcd_tidakrekomen          += pow($train['lcd']-$u_lcd_tidakrekomen,2);
                    $sum2_processor_tidakrekomen    += pow($train['processor']-$u_processor_tidakrekomen,2);
                    $sum2_rate_tidakrekomen         += pow($train['rate']-$u_rate_tidakrekomen,2);
                }
            }

            //ngitung standart deviasi
            $std_merk_rekomen           = sqrt($sum2_merk_rekomen/($n_rekomen-1));
            $std_ram_rekomen            = sqrt($sum2_ram_rekomen/($n_rekomen-1));
            $std_vga_rekomen            = sqrt($sum2_vga_rekomen/($n_rekomen-1));
            $std_hdd_rekomen            = sqrt($sum2_hdd_rekomen/($n_rekomen-1));
            $std_lcd_rekomen            = sqrt($sum2_lcd_rekomen/($n_rekomen-1));
            $std_processor_rekomen      = sqrt($sum2_processor_rekomen/($n_rekomen-1));
            $std_rate_rekomen           = sqrt($sum2_rate_rekomen/($n_rekomen-1));

            $std_merk_tidakrekomen          = sqrt($sum2_merk_tidakrekomen/($n_tidakrekomen-1));
            $std_ram_tidakrekomen           = sqrt($sum2_ram_tidakrekomen/($n_tidakrekomen-1));
            $std_vga_tidakrekomen           = sqrt($sum2_vga_tidakrekomen/($n_tidakrekomen-1));
            $std_hdd_tidakrekomen           = sqrt($sum2_hdd_tidakrekomen/($n_tidakrekomen-1));
            $std_lcd_tidakrekomen           = sqrt($sum2_lcd_tidakrekomen/($n_tidakrekomen-1));
            $std_processor_tidakrekomen     = sqrt($sum2_processor_tidakrekomen/($n_tidakrekomen-1));
            $std_rate_tidakrekomen          = sqrt($sum2_rate_tidakrekomen/($n_tidakrekomen-1));

            //array standart deviasi
            $std[0] = $std_merk_rekomen;
            $std[1] = $std_ram_rekomen ;
            $std[2] = $std_vga_rekomen;
            $std[3] = $std_hdd_rekomen;
            $std[4] = $std_lcd_rekomen;
            $std[5] = $std_processor_rekomen;
            $std[6] = $std_rate_rekomen;    

            $std[7]     = $std_merk_tidakrekomen;
            $std[8]     = $std_ram_tidakrekomen ;
            $std[9]     = $std_vga_tidakrekomen;
            $std[10]    = $std_hdd_tidakrekomen;
            $std[11]    = $std_lcd_tidakrekomen;
            $std[12]    = $std_processor_tidakrekomen;
            $std[13]    = $std_rate_tidakrekomen;   


            //rata-rata
            $avg[0] = $u_merk_rekomen;
            $avg[1] = $u_ram_rekomen ;
            $avg[2] = $u_vga_rekomen;
            $avg[3] = $u_hdd_rekomen;
            $avg[4] = $u_lcd_rekomen;
            $avg[5] = $u_processor_rekomen;
            $avg[6] = $u_rate_rekomen;  

            $avg[7]     = $u_merk_tidakrekomen;
            $avg[8]     = $u_ram_tidakrekomen ;
            $avg[9]     = $u_vga_tidakrekomen;
            $avg[10]    = $u_hdd_tidakrekomen;
            $avg[11]    = $u_lcd_tidakrekomen;
            $avg[12]    = $u_processor_tidakrekomen;
            $avg[13]    = $u_rate_tidakrekomen; 
        }
    function gaussian($x , $u, $std){
        return (1.0/($std* sqrt(2*3.1415926535))) * exp(-(($x-$u)*($x-$u)) / (2.0 * $std * $std));
    }

    function compare($merk,$ram,$vga,$hdd,$lcd,$processor,$rate,$avg,$std){
        $YA         = gaussian($merk,$avg[0],$std[0]) * gaussian($ram,$avg[1],$std[1]) * gaussian($vga,$avg[2],$std[2]) * gaussian($hdd,$avg[3],$std[3]) * gaussian($lcd,$avg[4],$std[4]) * gaussian($processor,$avg[5],$std[5]) * gaussian($rate,$avg[6],$std[6]);

        $TIDAK  = gaussian($merk,$avg[7],$std[7]) * gaussian($ram,$avg[8],$std[8]) * gaussian($vga,$avg[9],$std[9]) * gaussian($hdd,$avg[10],$std[10]) * gaussian($lcd,$avg[11],$std[11]) * gaussian($processor,$avg[12],$std[12]) * gaussian($rate,$avg[13],$std[13]);

        return $YA >= $TIDAK;
    }
    function YA($merk,$ram,$vga,$hdd,$lcd,$processor,$rate,$avg,$std){
        return gaussian($merk,$avg[0],$std[0]) * gaussian($ram,$avg[1],$std[1]) * gaussian($vga,$avg[2],$std[2]) * gaussian($hdd,$avg[3],$std[3]) * gaussian($lcd,$avg[4],$std[4]) * gaussian($processor,$avg[5],$std[5]) * gaussian($rate,$avg[6],$std[6]);
    }

    function TIDAK($merk,$ram,$vga,$hdd,$lcd,$processor,$rate,$avg,$std){
        // echo '<br> lololol <br>';
        // var_dump(gaussian($hdd,$avg[9],$std[9]));
        // echo '<br> lololol <br>';

        return gaussian($merk,$avg[7],$std[7]) * gaussian($ram,$avg[8],$std[8]) * gaussian($vga,$avg[9],$std[9]) * gaussian($hdd,$avg[10],$std[10]) * gaussian($lcd,$avg[11],$std[11]) * gaussian($processor,$avg[12],$std[12]) * gaussian($rate,$avg[13],$std[13]);
    }
    
    function confmatrix($class,$prediksi){
        if($class=="P"){ // if kelas positif
            if($prediksi == "P"){ // True positive
                return "TP";
            }
            else if($prediksi == "TP"){ // false negative
                return "FN";
            }
        }
        else if($class=="TP"){ // if kelas negatif
            if($prediksi == "P"){  //  false positive
                return "FP";
            }
            else if($prediksi == "TP"){ // true negative
                return "TN";
            }
        }
    }
?>


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
                        <h1 class="page-header">Hasil Cek Rekomendasi</h1>
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
                                        <?php 
                                            echo "Laptop dengan Merk : ".$merk.", ram : ".$ram.", vga : ".$vga.", hdd : ".$hdd.", lcd : ".$lcd.", processor : ".$processor.", rate : ".$rate."<br";
                                            $prediksi= (compare($merk,$ram,$vga,$hdd,$lcd,$processor,$rate,$avg,$std) == 1 ? "P":"TP") ;

                                            echo "<br><br><br><b>PREDIKSI REKOMENDASI : </b>".($prediksi=="P" ? "YA" : "TIDAK");                           
                                        ?>
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