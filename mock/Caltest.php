<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

use PHPUnit\Framework\TestCase;

class Caltest extends TestCase
{
  public function testCal()
  {
   $stub = $this->getMockBuilder('Cal')
                ->setMethods(array('respond'))
                ->getMock();
       $stub->method('respond')
              ->willReturn('code 200');
       $this->assertEquals('code 200', $stub->respond());
  }
}
// require('../libs/nusoap/lib/nusoap.php');
// $server = new nusoap_server();
// $server->configureWSDL('Caltest', 'urn:travels');
// $server->register("Caltest.testCal",
// array('data' => 'xsd:string'),
// 'urn:travels',
// 'urn:travels#testCal');
// $server->service(file_get_contents("php://input"));
