<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once './vendor/test/autoload.php';
include 'C_nbc.php';
//use PHPUnit\Framework\TestCase;

class Unittesting extends PHPUnit_Framework_TestCase
{
    //private $pt;private $pt2;
    private $gauss;
    protected function setUp(){
        // $this->pt = new PesanTiket(111,222,31,14);
        // $this->pt2 = new PesanTiket(1,2,3,4);
        $this->gauss = new C_nbc();
    }
    protected function tearDown(){
        // $this->pt = NULL;
        // $this->pt2 = NULL;
        $this->gauss= NULL;
    }
    public function testAdd(){
        // $result1 = $this->pt->generateKode(array(111,222,31,14));
        // $this->assertEquals(3645, $result1);
        // $result2 = $this->pt2->makeKode();
        // $this->assertEquals(1234, $result2);
        $result1 = $this->gauss->gaussian(5,3.5,0.82717);
        $this->assertEquals(0.585349, $result1);
        echo "string";
    }
}