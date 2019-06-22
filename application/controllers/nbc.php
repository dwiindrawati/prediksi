<?php global $database;?>

<?php
	// sumber
	// https://www.analyticsvidhya.com/blog/2017/09/naive-bayes-explained/
	// http://chem-eng.utoronto.ca/~datamining/dmc/naive_bayesian.htm
	// https://www.mathsisfun.com/data/standard-deviation-formulas.html

	$training = $this->mymodel->GetData('training','');
	if($training != NULL) {
		$sum_merk_rekomen			= 0;
		$sum_ram_rekomen 			= 0;
		$sum_vga_rekomen			= 0;
		$sum_hdd_rekomen			= 0;
		$sum_lcd_rekomen 			= 0;
		$sum_processor_rekomen		= 0;
		$sum_rate_rekomen			= 0;

		$sum_merk_tidakrekomen			= 0;
		$sum_ram_tidakrekomen 			= 0;
		$sum_vga_tidakrekomen			= 0;
		$sum_hdd_tidakrekomen			= 0;
		$sum_lcd_tidakrekomen 			= 0;
		$sum_processor_tidakrekomen		= 0;
		$sum_rate_tidakrekomen			= 0;


		$n_tidakrekomen 	= 0;
		$n_tidakrekomen 	= 0;
		$n_data				= 0;

		//menjumlah data total biasa
		foreach ($training as $train){
			if($t['rekomen'] == "YA"){
				$n_rekomen++;							
				$sum_merk_rekomen			= $train['x1'];
				$sum_ram_rekomen 			= $train['x2'];
				$sum_vga_rekomen			= $train['x3'];
				$sum_hdd_rekomen			= $train['x4'];
				$sum_lcd_rekomen 			= $train['x5'];
				$sum_processor_rekomen		= $train['x6'];
				$sum_rate_rekomen			= $train['x7'];
			}
			else if($t['rekomen'] == "TIDAK"){
				$n_tidakrekomen++;	
				$sum_merk_tidakrekomen			= $train['x1'];
				$sum_ram_tidakrekomen 			= $train['x2'];
				$sum_vga_tidakrekomen			= $train['x3'];
				$sum_hdd_tidakrekomen			= $train['x4'];
				$sum_lcd_tidakrekomen 			= $train['x5'];
				$sum_processor_tidakrekomen		= $train['x6'];
				$sum_rate_tidakrekomen			= $train['x7'];
			}
			$n_data++;
		}

		//rata-rata
		$u_merk_rekomen			= $sum_merk_rekomen/$n_rekomen;
		$u_ram_rekomen 			= $sum_ram_rekomen/$n_rekomen;
		$u_vga_rekomen			= $sum_vga_rekomen/$n_rekomen;
		$u_hdd_rekomen			= $sum_hdd_rekomen/$n_rekomen;
		$u_lcd_rekomen 			= $sum_lcd_rekomen/$n_rekomen ;
		$u_processor_rekomen	= $sum_lcd_rekomen/$n_rekomen ;
		$u_rate_rekomen			= $sum_rate_rekomen/$n_rekomen;

		$u_merk_tidakrekomen		= $sum_merk_tidakrekomen/$n_tidakrekomen;
		$u_ram_tidakrekomen 		= $sum_ram_tidakrekomen/$n_tidakrekomen;
		$u_vga_tidakrekomen			= $sum_vga_tidakrekomen/$n_tidakrekomen;
		$u_hdd_tidakrekomen			= $sum_hdd_tidakrekomen/$n_tidakrekomen;
		$u_lcd_tidakrekomen 		= $sum_lcd_tidakrekomen/$n_tidakrekomen;
		$u_processor_tidakrekomen	= $sum_processor_tidakrekomen/$n_tidakrekomen;
		$u_rate_tidakrekomen		= $sum_rate_tidakrekomen/$n_tidakrekomen;

		$sum2_merk_rekomen			= 0;
		$sum2_ram_rekomen 			= 0;
		$sum2_vga_rekomen			= 0;
		$sum2_hdd_rekomen			= 0;
		$sum2_lcd_rekomen 			= 0;
		$sum2_processor_rekomen		= 0;
		$sum2_rate_rekomen			= 0;

		$sum2_merk_tidakrekomen			= 0;
		$sum2_ram_tidakrekomen 			= 0;
		$sum2_vga_tidakrekomen			= 0;
		$sum2_hdd_tidakrekomen			= 0;
		$sum2_lcd_tidakrekomen 			= 0;
		$sum2_processor_tidakrekomen	= 0;
		$sum2_rate_tidakrekomen			= 0;

		//sum untuk standart deviasi
		foreach ($training as $t){
			if($t['rekomen'] == "YA"){
				$sum2_merk_rekomen			+= pow($t['x1']-$u_merk_rekomen,2);
				$sum2_ram_rekomen 			+= pow($t['x2']-$u_ram_rekomen,2);
				$sum2_vga_rekomen			+= pow($t['x3']-$u_vga_rekomen,2);
				$sum2_hdd_rekomen			+= pow($t['x4']-$u_hdd_rekomen,2);
				$sum2_lcd_rekomen 			+= pow($t['x5']-$u_lcd_rekomen,2);
				$sum2_processor_rekomen		+= pow($t['x6']-$u_processor_rekomen,2);
				$sum2_rate_rekomen			+= pow($t['x7']-$u_rate_rekomen,2);
			}
			else if($t['rekomen'] == "TIDAK"){
				$sum2_merk_tidakrekomen			+= pow($t['x1']-$u_merk_tidakrekomen,2);
				$sum2_ram_tidakrekomen 			+= pow($t['x2']-$u_ram_tidakrekomen,2);
				$sum2_vga_tidakrekomen			+= pow($t['x3']-$u_vga_tidakrekomen,2);
				$sum2_hdd_tidakrekomen			+= pow($t['x4']-$u_hdd_tidakrekomen,2);
				$sum2_lcd_tidakrekomen 			+= pow($t['x5']-$u_lcd_tidakrekomen,2);
				$sum2_processor_tidakrekomen	+= pow($t['x6']-$u_processor_tidakrekomen,2);
				$sum2_rate_tidakrekomen			+= pow($t['x7']-$u_rate_tidakrekomen,2);
			}
		}

		//ngitung standart deviasi
		$std_fasilitas_puas				= sqrt($sum2_fasilitas_puas / ($n_puas-1));
		$std_pelayanan_puas				= sqrt($sum2_pelayanan_puas / ($n_puas-1));
		$std_kualitas_puas				= sqrt($sum2_kualitas_puas 	/ ($n_puas-1));
		$std_harga_puas					= sqrt($sum2_harga_puas 	/ ($n_puas-1));
		$std_loyalitas_puas				= sqrt($sum2_loyalitas_puas	/ ($n_puas-1));
		$std_fasilitas_tidakpuas		= sqrt($sum2_fasilitas_tidakpuas	/ ($n_tidakpuas-1));
		$std_pelayanan_tidakpuas		= sqrt($sum2_pelayanan_tidakpuas	/ ($n_tidakpuas-1));
		$std_kualitas_tidakpuas			= sqrt($sum2_kualitas_tidakpuas 	/ ($n_tidakpuas-1));
		$std_harga_tidakpuas			= sqrt($sum2_harga_tidakpuas 			/ ($n_tidakpuas-1));
		$std_loyalitas_tidakpuas		= sqrt($sum2_loyalitas_tidakpuas 	/ ($n_tidakpuas-1));

		$std_merk_rekomen			= sqrt($sum2_merk_rekomen/($n_rekomen-1));
		$std_ram_rekomen 			= sqrt($sum2_ram_rekomen/($n_rekomen-1));
		$std_vga_rekomen			= sqrt($sum2_vga_rekomen/($n_rekomen-1));
		$std_hdd_rekomen			= sqrt($sum2_hdd_rekomen/($n_rekomen-1));
		$std_lcd_rekomen 			= sqrt($sum2_lcd_rekomen/($n_rekomen-1));
		$std_processor_rekomen		= sqrt($sum2_processor_rekomen/($n_rekomen-1));
		$std_rate_rekomen			= sqrt($sum2_rate_rekomen/($n_rekomen-1));

		$std_merk_tidakrekomen			= sqrt($sum2_merk_tidakrekomen/($n_tidakrekomen-1));
		$std_ram_tidakrekomen 			= sqrt($sum2_ram_tidakrekomen/($n_tidakrekomen-1));
		$std_vga_tidakrekomen			= sqrt($sum2_vga_tidakrekomen/($n_tidakrekomen-1));
		$std_hdd_tidakrekomen			= sqrt($sum2_hdd_tidakrekomen/($n_tidakrekomen-1));
		$std_lcd_tidakrekomen 			= sqrt($sum2_lcd_tidakrekomen/($n_tidakrekomen-1));
		$std_processor_tidakrekomen		= sqrt($sum2_processor_tidakrekomen/($n_tidakrekomen-1));
		$std_rate_tidakrekomen			= sqrt($sum2_rate_tidakrekomen/($n_tidakrekomen-1));

		//array standart deviasi
		$std[0] = $std_merk_rekomen;
		$std[1] = $std_ram_rekomen ;
		$std[2] = $std_vga_rekomen;
		$std[3] = $std_hdd_rekomen;
		$std[4] = $std_lcd_rekomen;
		$std[5]	= $std_processor_rekomen;
		$std[6]	= $std_rate_rekomen;	

		$std[7] 	= $std_merk_tidakrekomen;
		$std[8] 	= $std_ram_tidakrekomen ;
		$std[9] 	= $std_vga_tidakrekomen;
		$std[10] 	= $std_hdd_tidakrekomen;
		$std[11] 	= $std_lcd_tidakrekomen;
		$std[12]	= $std_processor_tidakrekomen;
		$std[13]	= $std_rate_tidakrekomen;	

		//rata-rata
		$avg[0] = $u_merk_rekomen;
		$avg[1] = $u_ram_rekomen ;
		$avg[2] = $u_vga_rekomen;
		$avg[3] = $u_hdd_rekomen;
		$avg[4] = $u_lcd_rekomen;
		$avg[5]	= $u_processor_rekomen;
		$avg[6]	= $u_rate_rekomen;	

		$avg[7] 	= $u_merk_tidakrekomen;
		$avg[8] 	= $u_ram_tidakrekomen ;
		$avg[9] 	= $u_vga_tidakrekomen;
		$avg[10] 	= $u_hdd_tidakrekomen;
		$avg[11] 	= $u_lcd_tidakrekomen;
		$avg[12]	= $u_processor_tidakrekomen;
		$avg[13]	= $u_rate_tidakrekomen;	
	}
	function gaussian($x , $u, $std){
		return (1.0/($std* sqrt(2*3.1415926535))) * exp(-(($x-$u)*($x-$u)) / (2.0 * $std * $std));
	}

	function compare($x1,$x2,$x3,$x4,$x5,$x6,$x7,$avg,$std){
		$puas 		= gaussian($x1,$avg[0],$std[0]) * gaussian($x2,$avg[1],$std[1]) * gaussian($x3,$avg[2],$std[2]) * gaussian($x4,$avg[3],$std[3]) * gaussian($x5,$avg[4],$std[4]) * gaussian($x6,$avg[5],$std[5]) * gaussian($x7,$avg[6],$std[6]);

		$tidakpuas 	= gaussian($x1,$avg[7],$std[7]) * gaussian($x2,$avg[8],$std[8]) * gaussian($x3,$avg[9],$std[9]) * gaussian($x4,$avg[9],$std[9]) * gaussian($x5,$avg[10],$std[11]) * gaussian($x6,$avg[12],$std[12]) * gaussian($x7,$avg[13],$std[13]);

		return $puas >= $tidakpuas;
	}
	function puas($x1,$x2,$x3,$x4,$x5,$x6,$x7,$avg,$std){
		return gaussian($x1,$avg[0],$std[0]) * gaussian($x2,$avg[1],$std[1]) * gaussian($x3,$avg[2],$std[2]) * gaussian($x4,$avg[3],$std[3]) * gaussian($x5,$avg[4],$std[4]) * gaussian($x6,$avg[5],$std[5]) * gaussian($x7,$avg[6],$std[6]);
	}

	function tidakpuas($x1,$x2,$x3,$x4,$x5,$x6,$x7,$avg,$std){
		return gaussian($x1,$avg[7],$std[7]) * gaussian($x2,$avg[8],$std[8]) * gaussian($x3,$avg[9],$std[9]) * gaussian($x4,$avg[9],$std[9]) * gaussian($x5,$avg[10],$std[11]) * gaussian($x6,$avg[12],$std[12]) * gaussian($x7,$avg[13],$std[13]);
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

<br>
<div class="row">
	<div class="col-lg-12">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tabel-pills" data-toggle="tab" aria-expanded="true">Tabel</a></li>
			<li class=""><a href="#matrix-pills" data-toggle="tab" aria-expanded="false">Evaluasi</a></li>
		</ul>
		<div class="tab-content">

			<!-- tabel -->
			<div class="tab-pane fade active in" id="tabel-pills">
				<h4>Tabel Hasil NBC</h4>
				<table width="100%" class="table table-striped table-bordered table-hover" id="tabel2">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>x1</th>
							<th>x2</th>
							<th>x3</th>
							<th>x4</th>
							<th>x5</th>
							<th>Label</th>
							<th>f(puas)</th>
							<th>f(tidakpuas)</th>
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
						$data = $database->nbcdatauji();
						if($data != NULL){
							$c=0;
							foreach($data as $d){
								$prediksi[$c] = (compare($d['x1'],$d['x2'],$d['x3'],$d['x4'],$d['x5'],$avg,$std) == 1 ? "P":"TP") ;
								echo "<tr>";
								echo 	"<td>".++$c."</td>";
								echo 	"<td>".$d['nama']."</td>";
								echo 	"<td>".$d['x1']."</td>";
								echo 	"<td>".$d['x2']."</td>";
								echo 	"<td>".$d['x3']."</td>";
								echo 	"<td>".$d['x4']."</td>";
								echo 	"<td>".$d['x5']."</td>";
								echo 	"<td>".$d['hasil']."</td>";
								echo 	"<td>".puas($d['x1'],$d['x2'],$d['x3'],$d['x4'],$d['x5'],$avg,$std)."</td>";
								echo 	"<td>".tidakpuas($d['x1'],$d['x2'],$d['x3'],$d['x4'],$d['x5'],$avg,$std)."</td>";
								echo 	"<td>".($prediksi[$c-1]=="P" ? "Puas" : "Tidak Puas")."</td>";
								echo 	"<td>".confmatrix(($d['hasil'] == "Puas" ? "P" : "TP"),$prediksi[$c-1])."</td>";
								echo "</tr>";
								if (confmatrix(($d['hasil'] == "Puas" ? "P" : "TP"),$prediksi[$c-1]) == "TP"){
									$TP++;
								}
								if (confmatrix(($d['hasil'] == "Puas" ? "P" : "TP"),$prediksi[$c-1]) == "TN"){
									$TN++;
								}
								if (confmatrix(($d['hasil'] == "Puas" ? "P" : "TP"),$prediksi[$c-1]) == "FP"){
									$FP++;
								}
								if (confmatrix(($d['hasil'] == "Puas" ? "P" : "TP"),$prediksi[$c-1]) == "FN"){
									$FN++;
								}
							}
						}

						$recall = $TP / ($TP+$FN);
						$precision = $TP / ($TP+$FP);
						$accuracy = ($TP+$TN)/($TP+$TN+$FP+$FN);
						$error_rate = ($FP+$FN) / ($TP+$TN+$FP+$FN);

					?>
					</tbody>
				</table>			
			</div>

			<!-- matrix -->
			<div class="tab-pane fade active in" id="matrix-pills">
				<h4>Evaluasi dan Validasi</h4>
				<div class="row">
					<div class="col-lg-6">
						<table width="100%" class="table table-bordered" id="tabel2">
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
								<td>TP : <?php echo $TP; ?></td>
								<td>FN : <?php echo $FN; ?></td>
							</tr>
							<tr>
								<td>Negatif</td>
								<td>FP : <?php echo $FP; ?></td>
								<td>TN : <?php echo $TN; ?></td>
							</tr>
						</table>					
					</div>
					<div class="col-lg-6">
						<table width="100%" class="table table-bordered" id="tabel2">
							<tr>
								<td width="33%">recall</td>
								<td> <?php echo round($recall*100,2); ?>% </td>
							</tr>
							<tr>
								<td>precision</td>
								<td> <?php echo round($precision*100,2); ?>% </td>
							</tr>
							<tr>
								<td>accuracy</td>
								<td> <?php echo round($accuracy*100,2); ?>% </td>
							</tr>
							<tr>
								<td>error rate</td>
								<td><?php echo round($error_rate*100,2); ?>% </td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
							<div class="panel panel-default">
									<div class="panel-heading">
											Confusion Matrix
									</div>
									<!-- /.panel-heading -->
									<div class="panel-body">
											<div id="morris-bar-chart1"></div>
									</div>
									<!-- /.panel-body -->
							</div>
							<!-- /.panel -->
					</div>
					<div class="col-lg-6">
							<div class="panel panel-default">
									<div class="panel-heading">
											Performance Measures
									</div>
									<!-- /.panel-heading -->
									<div class="panel-body">
											<div id="morris-bar-chart2"></div>
									</div>
									<!-- /.panel-body -->
							</div>
							<!-- /.panel -->
					</div>
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