<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
	public function test_gaussian1()
	{
		$output = $this->request('GET', 'C_nbc/gaussian_test/5/3.5/0.82717');
		$output = substr($output, 0,5);
		$this->assertEquals('0.093', $output);
	}

	public function test_gaussian2()
	{
		$output = $this->request('GET', 'C_nbc/gaussian_test/6/5.7/9.378947');
		$output = substr($output, 0,5);
		$this->assertEquals('0.042', $output);
	}

	public function test_gaussian3()
	{
		$output = $this->request('GET', 'C_nbc/gaussian_test/1/1.25/0.444262');
		$output = substr($output, 0,5);
		$this->assertEquals('0.766', $output);
	}

	public function test_avg_std(){
			$output_avg_std = $this->request('GET', 'C_nbc/avg_std_test/data_uji');

			$avg_output[0] = 0.5;  //rata-rata merk rekomen
			$avg_output[1] = 0.2 ; // rata-rata ram rekomen
			$avg_output[2] = 0.2; //rata-rata vga rekomen
			$avg_output[3] = 32; //rata-rata hdd rekomen
			$avg_output[4] = 1.1; //rata-rata lcd rekomen
			$avg_output[5]	= 1.1; //rata-rata processor rekomen
			$avg_output[6]	= 0.5;	//rata-rata rate rekomen

			$avg_output[7] 	= 0.6; //rata-rata merk tidak rekomen
			$avg_output[8] 	= 0.2; //rata-rata ram tidak rekomen
			$avg_output[9] 	= 0.2; //rata-rata vga tidak rekomen
			$avg_output[10] = 30; //rata-rata hdd tidak rekomen
			$avg_output[11] = 1.3; //rata-rata lcd tidak rekomen
			$avg_output[12]	= 0.2; //rata-rata processor tidak rekomen
			$avg_output[13]	= 0.1;	////rata-rata rate tidak rekomen

		
			$std_output[0] = 3.1358146203711; //std merk rekomen
			$std_output[1] = 5.5015149428741 ; //std ram rekomen
			$std_output[2] = 1;				//std vga rekomen
			$std_output[3] = 803.08986628729; //std hdd rekomen
			$std_output[4] = 13.646733430874; //std lcd rekomen
			$std_output[5]	= 1.9578900207451; //std processor rekomen
			$std_output[6]	= 3.6590830666834;//std rate rekomen

			$std_output[7] 	= 3.3862466931201; //std merk tidakrekomen
			$std_output[8] 	= 3.457680661304; //std ram tidakrekomen
			$std_output[9] 	= 1.4681810363697;//std vga tidakrekomen
			$std_output[10] = 614.674620339;//std hdd tidakrekomen
			$std_output[11] = 13.189642401016; //std lcd tidakrekomen
			$std_output[12]	= 2.0816659994661; //std processor tidakrekomen
			$std_output[13]	= 1.5670212364724; //std rate tidakrekomen

			$arrayoutput = array(
				'avg' => $avg_output ,
				'std' => $std_output);
			//var_dump($arrayoutput);
			$json=json_encode($arrayoutput);
		$this->assertEquals($json, $output_avg_std);
	}

	// public function test_method_404()
	// {
	// 	$this->request('GET', 'welcome/method_not_exist');
	// 	$this->assertResponseCode(404);
	// }

	// public function test_APPPATH()
	// {
	// 	$actual = realpath(APPPATH);
	// 	$expected = realpath(__DIR__ . '/../..');
	// 	$this->assertEquals(
	// 		$expected,
	// 		$actual,
	// 		'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
	// 	);
	// }
}
